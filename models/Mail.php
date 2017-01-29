<?php

namespace app\models;
use Yii;
use yii\base\Model;


class Mail extends Model
{
	

	

	public function regmail()
	{
		
		Yii::$app->mailer->compose('user_validation', [
    		'login' => $this->email,
   			'password' => $this->password,
   			'key' => $user->key,
		])
			->setFrom('from@domain.com')
		    ->setTo($this->email)
		    ->setSubject('Message subject')
		    ->send();
		
		
	}
}