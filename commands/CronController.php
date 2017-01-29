<?php
namespace app\commands;
 
use Yii;
use yii\console\Controller;
use app\models\DebtActions;
 
class CronController extends Controller
{
    public function actionIndex()
    {
        $confirm_model = new DebtActions();
        $confirm_model->publish();
    }
}