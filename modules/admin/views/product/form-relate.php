<?php

use app\modules\admin\components\Html;
use kartik\form\ActiveForm;
use kartik\grid\ActionColumn;
use kartik\grid\GridView;
use kartik\grid\SerialColumn;
use kartik\widgets\Select2;
use richardfan\widget\JSRegister;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\widgets\Pjax;

$url = Url::to(['get-relate-list']);
?>
<?php
$this->beginContent('@module/views/product/layouts/form.php', [
    'model' => $model,
]);
?>
<?php
$form = ActiveForm::begin([
            'type' => 'vertical',
        ])
?>
<div class="well well-sm">
    <?=
    $form->field($relate, 'relate_id')->widget(Select2::className(), [
        'options' => [
            'placeholder' => 'เลือกสินค้าที่เกี่ยวข้อง ...',
        ],
        'pluginOptions' => [
            'ajax' => [
                'url' => $url,
                'dataType' => 'json',
                'data' => new JsExpression('
                    function(params) {
                        return {
                            q : params.term,
                            page : params.page || 1
                        }; 
                    }
                ')
            ],
            'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
            'templateResult' => new JsExpression('function(data) { return data.text; }'),
            'templateSelection' => new JsExpression('function (data) { return data.text; }'),
        ],
    ]);
    ?>
</div>
<?php ActiveForm::end(); ?>
<?php
Pjax::begin([
    'id' => 'pjax-grid',
]);
?>
<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'class' => SerialColumn::className(),
        ],
        [
            'label' => 'ชื่อสินค้า',
            'attribute' => 'relate.name',
        ],
        [
            'header' => 'ลบ',
            'class' => ActionColumn::className(),
            'template' => '{delete-relate}',
            'buttons' => [
                'delete-relate' => function($url) {
                    return Html::a(Html::icon('trash'), $url, [
                                'data-pjax' => '0',
                                'data-ajax' => '1',
                                'data-ajax-method' => 'post',
                                'data-ajax-pjax-reload' => '#pjax-grid',
                                'data-ajax-confirm' => 'ต้องการลบรายการนี้?',
                    ]);
                },
            ],
            'headerOptions' => [
                'class' => 'text-center',
                'width' => 80,
            ],
            'contentOptions' => [
                'class' => 'text-center',
            ],
        ],
    ],
]);
?>
<?php Pjax::end(); ?>
<?php $this->endContent(); ?>
<?php JSRegister::begin(); ?>
<script>
    $("#productrelate-relate_id").on('select2:select', function (e) {
        var data = e.params.data;
        $.post('<?= Url::to(['add-relate', 'id' => $model->id]); ?>', {relate_id: data.id}, function () {
            $.pjax.reload({
                container: '#pjax-grid',
                timeout: 5000
            });
        });
    });
</script>
<?php JSRegister::end(); ?>