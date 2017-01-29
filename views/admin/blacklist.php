<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Published debts';

?>

<h1><?= Html::encode($this->title) ?></h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'company',
            'adress:ntext',
            'country',
             'debt',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
            ],
        ],
    ]); ?>