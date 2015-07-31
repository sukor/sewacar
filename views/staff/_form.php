<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\widgets\ActiveForm;
use app\models\Position;
use yii\helpers\ArrayHelper;
use app\models\Department;


/* @var $this yii\web\View */
/* @var $model app\models\Staff */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-form">
	<?php

	$Position=Position::find()->all();
    $arraypos=  ArrayHelper::map($Position,'positio_id','position_name');

    $Department=Department::find()->all();
    $arraydep=  ArrayHelper::map($Department,'department_id','department_name');

// echo '<pre>';
// 	print_r($arraypos);
// echo '<pre>';

	?>

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'position_id')->dropDownList($arraypos,['prompt'=>'--Select--']) ?>

    <?= $form->field($model, 'department_id')->dropDownList($arraydep,['prompt'=>'--Select--']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
