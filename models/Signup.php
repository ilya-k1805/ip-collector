<?php

namespace app\models;
use Yii;
use yii\base\Model;


class Signup extends Model
{
	public $email;
	public $password;
	public $companyName;
	public $address;
	public $country;

	public function rules()
	{
		return[
			[['email','password','companyName','address','country'],'required'],
			['email','email'],
			['email','unique','targetClass'=>'app\models\User'],
			['password','string','min'=>2,'max'=>30]

		];
	}

	public function signup()
	{
		$user = new User();
		$user->key = sha1(rand(0,100000000).rand(0,100000000).rand(0,100000000));
		$user->email = $this->email;
		$user->setPassword($this->password);
		$user->companyName = $this->companyName;
		$user->address = $this->address;
		$user->country = $this->country;
		$user->role = 'creditor';
		Yii::$app->mailer->compose('user_validation', [
    		'login' => $this->email,
   			'password' => $this->password,
   			'key' => $user->key,
		])
			->setFrom('info@ip-collector.com')
		    ->setTo($this->email)
		    ->setSubject('Email confirmation')
		    ->send();
		$user->save(); 
		$userRole = Yii::$app->authManager->getRole('unvalidated'); 
		return Yii::$app->authManager->assign($userRole, $user->id); // вернет true или false
	}
}