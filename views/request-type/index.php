<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RequestTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Request Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Request Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'type_id',
            'request_name',
            'req_type',
            'date_in',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
