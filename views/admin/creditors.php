<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CreditorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Creditors';
?>
<div class="creditors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'email:email',
            'companyName',
            'address',
            'country',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
