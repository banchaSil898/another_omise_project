<?php

namespace app\controllers;

use Yii;
use app\models\Purchase;
use app\models\PurchaseStatus;
use app\models\OmisePayments;
use yii\web\NotFoundHttpException;
use yii\helpers\Url;

require_once Yii::getAlias('@omise/Omise.php');  // เรียกใช้ Omise SDK ที่กำหนดใน aliases

class ApiController extends Controller {
    // ปิดการใช้งาน CSRF validation สำหรับ Action นี้
    public $enableCsrfValidation = false;

    public function actionCartSummary() {
        $cart = $this->getCart();
        $data = Yii::$app->request->get('Purchase');
        if (isset($data['delivery_method'])) {
            $cart->delivery_method = $data['delivery_method'];
        }
        $promotions = $cart->getPromotionSummary();

        return $this->renderAjax('cart-summary', [
                    'cart' => $cart,
                    'promotions' => $promotions,
        ]);
    }

    public function actionComplete(){

        $request = Yii::$app->request;

        if ($request->isPost) {
            $dataFromOmise = json_decode(file_get_contents('php://input'));

            if (isset($dataFromOmise->key) && ($dataFromOmise->data->status === 'successful')) {
                try {
                    $chargeData = OmisePayments::find()
                        ->with('purchase')
                        ->where(['charge_id' => $dataFromOmise->data->id])
                        ->one(); // เรียก one() เพื่อให้ได้ออบเจ็กต์ของ OmisePayments
                } catch (\Exception $e) {
                    $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
                    Yii::error([
                        'message' => 'An error occurred!',
                        'location' => [
                            'file' => $trace[0]['file'] ?? null,
                            'line' => $trace[0]['line'] ?? null,
                            'charge id' => $dataFromOmise->data->id,
                            'purchase_no' => $chargeData->purchase->purchase_no,
                            'error' => $e->getMessage()
                        ],
                    ]);
                }

                if(($dataFromOmise->data->amount/100) - $chargeData->purchase->price_grand == 0){

                    $updated_date = new \DateTime();
                    $updated_date->setTimezone(new \DateTimeZone('Asia/Bangkok'));

                    $payment_date = new \DateTime($dataFromOmise->data->paid_at);
                    $payment_date->setTimezone(new \DateTimeZone('Asia/Bangkok'));

                    $commonDescription = "ชำระผ่าน omise รหัส " . $dataFromOmise->data->id;
                    $chargeData->purchase->status = Purchase::STATUS_PAID;
                    $chargeData->purchase->status_comment = $commonDescription;
                    $chargeData->purchase->payment_info = $commonDescription;
                    $chargeData->purchase->is_paid = 1;
                    $chargeData->purchase->payment_date = $payment_date->format('Y-m-d H:i:s');
                    $chargeData->purchase->updated_at = $updated_date->format('Y-m-d H:i:s');

                    $purchaseStatus = new PurchaseStatus;
                    $purchaseStatus->purchase_id = $chargeData->purchase->id;
                    $purchaseStatus->created_at = $payment_date;
                    $purchaseStatus->updated_at = $updated_date;
                    $purchaseStatus->description = $commonDescription;
                    $purchaseStatus->status = Purchase::STATUS_PAID;
                    $purchaseStatus->is_sendmail = 1;
                    try{
                        $chargeData->purchase->save();
                        $purchaseStatus->save();
                    }catch(\Exception $exc){
                        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
                        Yii::error([
                            'message' => 'An error occurred!',
                            'location' => [
                                'file' => $trace[0]['file'] ?? null,
                                'line' => $trace[0]['line'] ?? null,
                                'charge id' => $dataFromOmise->data->id,
                                'purchase_no' => $chargeData->purchase->purchase_no,
                                'error' => $exc->getMessage(),
                                'query' => [$purchaseStatus->errors, $chargeData->purchase->errors                                                                                                                                                          ]
                            ],
                        ]);
                    }
                }
            }
        }
    }

    public function actionOmiseCallback($order_no){
        // บันทึกข้อมูล GET parameters
        $getParams = Yii::$app->request->get();

        // กำหนดทั้ง PUBLIC_KEY และ SECRET_KEY
        define('OMISE_PUBLIC_KEY', Yii::$app->params['omisePublicKey']);
        define('OMISE_SECRET_KEY', Yii::$app->params['omiseSecretKey']);

        $model = Purchase::findOne(['purchase_no' => $order_no]);
        if(!$model){
            throw new NotFoundHttpException('ไม่พบคำสั่งซื้อ');
        }

        // ค้นหา charge_id จากฐานข้อมูล
        $omisePayment = OmisePayments::findOne(['order_id' => $model->id]);
        if ($omisePayment && $omisePayment->charge_id) {
            $chargeId = $omisePayment->charge_id;
            
            try {
                // ขั้นตอนที่ 6: เรียกใช้งาน Charges API เพื่อตรวจสอบสถานะการชำระเงิน
                $charge = \OmiseCharge::retrieve($chargeId);

                if ($charge['status'] === 'successful') {
                    // อัพเดทสถานะการสั่งซื้อ
                    $model->status = Purchase::STATUS_PAID;
                    $model->payment_info = "ชำระผ่าน Omise รหัส " . $charge['id'];
                    $model->save();
                    
                    // อัพเดทข้อมูลการชำระเงิน
                    $omisePayment->status = $charge['status'];
                    if (isset($charge['paid_at'])) {
                        $transaction_date = new \DateTime($charge['paid_at']);
                        $transaction_date->setTimezone(new \DateTimeZone('Asia/Bangkok'));
                        $omisePayment->transaction_date = $transaction_date->format('Y-m-d H:i:s');
                    }
                    $omisePayment->save();
                    
                    return $this->redirect(['cart/done', 'order_no' => $model->purchase_no]);
                } else {
                    // กรณีการชำระไม่สำเร็จ
                    Yii::error('การชำระเงินไม่สำเร็จ: ' . $charge['status']);
                    $model->status = Purchase::STATUS_NEW;
                    $model->save();
                    return $this->redirect(['cart/error', 'order_no' => $order_no]);
                }
            } catch (\Exception $e) {
                Yii::error('เกิดข้อผิดพลาดในการตรวจสอบ charge: ' . $e->getMessage());
                return $this->redirect(['site/error']);
            }
        } else {
            // ไม่พบ charge_id ในฐานข้อมูล
            Yii::error('ไม่พบ charge_id ในฐานข้อมูลสำหรับคำสั่งซื้อ: ' . $order_no);
            return $this->redirect(['site/error']);
        }
    }
}
