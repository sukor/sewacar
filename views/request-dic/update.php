<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RequestDic */

$this->title = 'Update Request Dic: ' . ' ' . $model->req_id;
$this->params['breadcrumbs'][] = ['label' => 'Request Dics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->req_id, 'url' => ['view', 'id' => $model->req_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="request-dic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
