<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Position */

$this->title = 'Update Position: ' . ' ' . $model->positio_id;
$this->params['breadcrumbs'][] = ['label' => 'Positions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->positio_id, 'url' => ['view', 'id' => $model->positio_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="position-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
