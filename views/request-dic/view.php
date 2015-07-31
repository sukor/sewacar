<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RequestDic */

$this->title = $model->req_id;
$this->params['breadcrumbs'][] = ['label' => 'Request Dics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-dic-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->req_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->req_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'req_id',
            'request_status',
            'date_log',
            'date_done',
            'reqType.request_name',
            'detail_request:ntext',
            'assgTo.name',
            'reqBy.name',
            'date_due',
            'quantity',
            'special_request:ntext',
            'other',
        ],
    ]) ?>

</div>
