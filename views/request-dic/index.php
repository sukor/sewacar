<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;


/* @var $this yii\web\View */
/* @var $searchModel app\models\RequestDicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Request Dics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-dic-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Request Dic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


<?php
$gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],
         

            'request_status',
            'date_log',
            'date_done',
            'reqType.request_name',
            // 'detail_request:ntext',
            'assgTo.name',
            'reqBy.name',
            'date_due',
            'quantity',
            // 'special_request:ntext',
            // 'other',

            ['class' => 'yii\grid\ActionColumn'],
        ];


?>

<?= ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns
]);
?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
    ]); ?>

</div>
