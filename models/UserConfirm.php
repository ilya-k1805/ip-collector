<?php

namespace app\models;
use Yii;
use yii\base\Model;

class UserConfirm extends Model
{
	public $email;
	public $key;
	public $is_validated;

	public function confirm()
	{
		$user = $this->getUser();
		if($user)
		{
			$manager = Yii::$app->authManager;
			$userRole = $manager->getRole('unvalidated'); 
			$userRole = $userRole ? : $manager->getPermission('unvalidated');
			$manager->revoke($userRole,$user->id);

			$creditorRole = $manager->getRole('creditor'); 
			$manager->assign($creditorRole, $user->id);
			return Yii::$app->response->redirect(['user/login']);
		}
	}

	public function getUser()
	{
		return User::findOne(['email'=>$this->email, 'key'=>$this->key]); 
	}
}