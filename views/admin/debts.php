<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlacklistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $title;
?>
<div class="blacklist-index">

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
                'template' => '{view} {confirm} {cancel}',
                'buttons' => [
                    'confirm' => function ($id) {
                        return Html::a('Confirm', $id);
                    },
                    'cancel' => function ($id) {
                        return Html::a('Cancel', $id);
                    },
            ],
            ],
            
        ],
    ]); ?>
</div>
