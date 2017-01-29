<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Confirm your registration';

?>

<p>
  <br />Thank you for your registration.</p>
<p>Your login: <?=$login?></p>
<p>Your password: <?=$password?></p>
<p>Please follow the 
<?=  Html::a('link', 
	Yii::$app->urlManager->createAbsoluteUrl(
		[
			'/user/confirm',
			'login' => $login,
			'key' => $key
		]

	)); ?> 
to activate your account.</p>
<p>
  <br />We believe that IP Collector will be helpful for you.</p>
<p>
  <br />Best regards,</p>
<p>Site Administration</p>