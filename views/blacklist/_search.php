<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BlacklistSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blacklist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'creditor_id') ?>

    <?= $form->field($model, 'company') ?>

    <?= $form->field($model, 'adress') ?>

    <?= $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'debt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
