<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use app\models\RequestType;
use yii\helpers\ArrayHelper;
use app\models\Staff;

/* @var $this yii\web\View */
/* @var $model app\models\RequestDic */
/* @var $form yii\widgets\ActiveForm */
?>

<?php

    $RequestType=RequestType::find()->all();
    $arraytype=  ArrayHelper::map($RequestType,'type_id','request_name');

    $Staff=Staff::find()->all();
    $arrayStaff=  ArrayHelper::map($Staff,'staff_id','name');

if(isset($erros)){

    echo Alert::widget([
    'options' => [
        'class' => 'alert-info',
    ],
    'body' => $erros,
]);
}

?>

<div class="request-dic-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'req_type_id')->dropDownList($arraytype,['prompt'=>'--Select--']) ?>

   
    <?= $form->field($model, 'detail_request')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'assg_to')->dropDownList($arrayStaff,['prompt'=>'--Select--'])?>

    <?= $form->field($model, 'req_by')->dropDownList($arrayStaff,['prompt'=>'--Select--']) ?>

    <?= $form->field($model, 'date_due')->widget(
     DatePicker::className(),[
      'convertFormat'=>true,
      'pluginOptions'=>[
         'format'=>'d-M-y',
      ]
     ]

    ); ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'special_request')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'other')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
