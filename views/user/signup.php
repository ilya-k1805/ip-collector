<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Registration';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">
	<h1><?= Html::encode($this->title) ?></h1>
	<?php
		$form = ActiveForm::begin(['class'=>'form-hirizontal']);  
	?>

		<?=$form->field($model,'email')->textInput(['autofocus'=>true]) ?>

		<?=$form->field($model,'password')->passwordInput() ?>

		<?=$form->field($model,'companyName')->textInput() ?>

		<?=$form->field($model,'address')->textInput() ?>

		<?=$form->field($model,'country')->textInput() ?>
		
		<div>
            <?= Html::submitButton('Sign up', ['class' => 'btn btn-primary']) ?>
        </div>
	
	<?php
		ActiveForm::end();
	?>







</div>