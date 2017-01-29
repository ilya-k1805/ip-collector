<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'New debt';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="debt-new">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <div calss='col-md-6'>
            <?=$form->field($newDebt,'company')->textInput();  ?>
        </div>
        <div calss='col-md-6'>
            <?=$form->field($newDebt,'adress')->textInput();  ?>
        </div>
        <div calss='col-md-6'>
            <?=$form->field($newDebt,'country')->textInput();  ?>
        </div>
        <div calss='col-md-6'>
            <?=$form->field($newDebt,'debt')->textInput();  ?>
        </div>
        
        <div calss='col-md-12'>
            <?=Html::submitButton('Create',['class' => 'btn btn-success']); ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>
