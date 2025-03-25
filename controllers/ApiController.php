<?php

namespace app\controllers;

use Yii;
use app\models\Purchase;
use app\models\PurchaseStatus;
use app\models\OmisePayments;
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

        \Omise\Omise::setSecretKey(Yii::$app->params['omiseSecretKey']);

        $model = Purchase::findOne(['purchase_no' => $order_no]);
        if(!$model){
            throw new NotFouondHttpException('ไม่พบคำสั่งซื้อ');
        }

        $chargeId = Yii::$app->request->get('charge_id');
        $charge = \Omise\Charge::retrieve($chargeId);

        if ($charge['status'] === 'successful') {
            $model->status = Purchase::STATUS_PAID;
            $model->save();
            
            $omisePayments = new OmisePayments;
            $omisePayments->order_id = $model->id;
            $omisePayments->charge_id = $charge['id'];
            $omisePayments->amount = $charge['amount'];
            $omisePayments->net = $charge['net'];
            $omisePayments->fee = $charge['fee'];
            $omisePayments->fee_vat = $charge['fee_vat'];
            $omisePayments->currency = $charge['currency'];
            $omisePayments->status = $charge['status'];
            $omisePayments->payment_method = 'CREDITCARD';
            $transaction_date = new \DateTime($charge['paid_at']);
            $transaction_date->setTimezone(new \DateTimeZone('Asia/Bangkok'));
            $omisePayments->transaction_date = $transaction_date->format('Y-m-d H:i:s');
            $created_date = new \DateTime();
            $created_date->setTimezone(new \DateTimeZone('Asia/Bangkok'));
            $omisePayments->created_at = $created_date->format('Y-m-d H:i:s');
            if($omisePayments->save()){
                $model->payment_info = "ชำระผ่าน omise รหัส " . $charge['id'];
                $model->save();
                $this->redirect(['done', 'order_no' => $model->purchase_no]);
            }
            $this->redirect(['done', 'order_no' => $order_no]);
        } else {
            $model->status = Purchase::STATUS_FAILED;
            $model->save();
            return $this->redirect(['done', 'order_no' => $order_no]);
        }
    }
}
