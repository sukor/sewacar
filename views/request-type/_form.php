<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RequestType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'request_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'req_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_in')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
