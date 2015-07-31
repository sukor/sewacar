<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RequestDicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-dic-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'req_id') ?>

    <?= $form->field($model, 'request_status') ?>

    <?= $form->field($model, 'date_log') ?>

    <?= $form->field($model, 'date_done') ?>

    <?= $form->field($model, 'req_type_id') ?>

    <?php // echo $form->field($model, 'detail_request') ?>

    <?php // echo $form->field($model, 'assg_to') ?>

    <?php // echo $form->field($model, 'req_by') ?>

    <?php // echo $form->field($model, 'date_due') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'special_request') ?>

    <?php // echo $form->field($model, 'other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
