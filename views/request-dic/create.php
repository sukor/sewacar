<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RequestDic */

$this->title = 'Create Request Dic';
$this->params['breadcrumbs'][] = ['label' => 'Request Dics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-dic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
