<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Signup;
use app\models\Login;
use app\models\UserConfirm;

class UserController extends Controller
{
    
   public function actionSignup()
   {

        if(!Yii::$app->user->isGuest)
        {
          return $this->goHome();
        }

        $session = Yii::$app->session;

        if(Yii::$app->request->post('cancel') === '')
        {
            return Yii::$app->response->redirect(['site/index']);
        }
        elseif(Yii::$app->request->post('accept') === '')
        {
            $session->set('signup_tou', true);
        }

        if(!$session->get('signup_tou'))
        {
            return $this->render('tou');
        }

        

        else
        {
            $model = new Signup();
            if(Yii::$app->request->post('Signup'))
            {
                $model->attributes = Yii::$app->request->post('Signup');

                if($model->validate() && $model->signup())
                {
                    return $this->goHome();
                }
            }
        }
            

        return $this->render('signup',['model'=>$model]);
   }

   public function actionLogin()
   {

        if(!Yii::$app->user->isGuest)
        {
          return $this->goHome();
        }

        $login_model = new Login();

        if(Yii::$app->request->post('Login'))
        {
            $login_model->attributes = Yii::$app->request->post('Login');

            if($login_model->validate())
            {
                if($login_model->getUser()->getRoleName() === 'unvalidated')
                {
                    return $this->goHome();
                }

                Yii::$app->user->login($login_model->getUser());
                if(Yii::$app->user->identity->getRoleName() === 'admin')
                {
                    return Yii::$app->response->redirect(['admin']);
                }
                return $this->goHome();
            }
        }

        return $this->render('login',['login_model'=>$login_model]);
   }

   public function actionConfirm()
   {
      $confirm_model = new UserConfirm();
      $confirm_model->email = Yii::$app->request->get('login');
      $confirm_model->key = Yii::$app->request->get('key');
      $confirm_model->confirm();
   }
}
