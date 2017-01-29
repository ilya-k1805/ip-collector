<?php
namespace app\commands;
 
use Yii;
use yii\console\Controller;
use \app\rbac\UserGroupRule;
 
class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll(); 

        $role = Yii::$app->authManager->createRole('admin');
        $role->description = 'admin';
        Yii::$app->authManager->add($role);
         
        $role = Yii::$app->authManager->createRole('creditor');
        $role->description = 'Creditor';
        Yii::$app->authManager->add($role);

        $role = Yii::$app->authManager->createRole('unvalidated');
        $role->description = 'Unvalidated';
        Yii::$app->authManager->add($role);
    }
}