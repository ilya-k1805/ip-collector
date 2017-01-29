<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-login">
	<h1><?=Html::encode($this->title) ?></h1>

	<?php
		$form = ActiveForm::begin();  
	?>

		<?=$form->field($login_model,'email')->textInput(['autofocus'=>true]) ?>

		<?=$form->field($login_model,'password')->passwordInput() ?>

		<div>
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
        </div>

	<?php
		ActiveForm::end();
	?>
</div>