<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\BlacklistSearch;
use app\models\Blacklist;
use app\models\DebtActions;
use app\models\CreditorsSearch;
use yii\filters\AccessControl;

use yii\web\NotFoundHttpException;

class AdminController extends Controller
{
	public $layout = 'admin';
	public $defaultAction = 'newdebts';

	public function behaviors()
	{
	    return [
	        
	        'access' => [
	            'class' => AccessControl::className(),
	            'rules' => [
	                [
	                    'allow' => true,
	                    'roles' => ['admin'],
	                ],
	            ],
	        ],
	         
	    ];
	}

	public function actionBlacklist()
	{
		$searchModel = new BlacklistSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, 1); // 1 - опубликованныеы долги

        return $this->render('blacklist', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);		
	}

	public function actionConfirmeddebts()
	{
		$searchModel = new BlacklistSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, 2); // 2 - подтвержденный долги

        return $this->render('blacklist', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);		
	}

	public function actionNewdebts()
	{
		$searchModel = new BlacklistSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams, 0);
		return $this->render('debts', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'title' => 'New debts',
        ]);
	}

	public function actionCanceldebts()
	{
		$searchModel = new BlacklistSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams, -1);
		return $this->render('debts', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'title' => 'Canceled debts',
        ]);
	}

	public function actionCancel($id)
	{
		$confirm_model = new DebtActions();
     	$confirm_model->debt_id = $id;
     	$confirm_model->cancel();
     	return $this->redirect(['newdebts']);
	}

	public function actionConfirm($id)
	{
		$confirm_model = new DebtActions();
     	$confirm_model->debt_id = $id;
     	$confirm_model->confirm();
     	return $this->redirect(['newdebts']);
	}

	public function actionCreditors()
	{
		$searchModel = new CreditorsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('creditors', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}

}