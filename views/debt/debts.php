<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlacklistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blacklist-index">
    <p>
        <?= Html::a('New debt', ['new'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Published', 'url' => ['/debt/published']],
                ['label' => 'Confirmed', 'url' => ['/debt/confirmed']],
                ['label' => 'Unconfirmed', 'url' => ['/debt/unconfirmed']],
                ['label' => 'Canceled', 'url' => ['/debt/canceled']],
            ],

        ]);
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

        ],
    ]); ?>
</div>
