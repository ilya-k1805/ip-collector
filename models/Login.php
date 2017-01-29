<?php

namespace app\models;

use yii\base\Model;

class Login extends Model
{
	public $email;
	public $password;

	public function rules()
	{
		return[
			[['email','password'],'required'],
			['email','email'],
			['password','validatePassword'] //собственная функция для проверки пароля
		];
	}

	public function validatePassword($attribute,$params)
	{

		if(!$this->hasErrors()) //если нет ошибок в валидации, можно убрать
		{
			$user = $this->getUser(); //получаем пользователя для дальнейшего сравнения пароля

			if(!$user || !$user->validatePassword($this->password)) 
			{
				//если такой пользователь не найден
				//или введеный пароль и пароль пользоватедя из базы не совпадают
				//то добавляем новую ошибку для пароля
				$this->addError($attribute,'Incorrect username or password');
			}
		}
	}

	public function getUser()
	{
		return User::findOne(['email'=>$this->email]); //а получаем его по введеному емейлу
	}
}
