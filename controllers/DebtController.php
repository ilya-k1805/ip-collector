<?php

namespace app\controllers;

use Yii;
use app\models\Blacklist;
use app\models\BlacklistSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\UploadForm;
use yii\web\UploadedFile;

class DebtController extends Controller
{
	public function behaviors()
	{
	    return [
	        
	        'access' => [
	            'class' => AccessControl::className(),
	            'rules' => [
	                [
	                    'allow' => true,
	                    'roles' => ['creditor'],
	                ],
	            ],
	        ],
	         
	    ];
	}

	public function actionPublished()
	{
		$searchModel = new BlacklistSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, 1, true); // 0 - неподтвержденные долги

        return $this->render('debts', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'title' => 'Unconfirmed debts',
            'edit' => true,
        ]);
	}

	public function actionUnconfirmed()
	{
		$searchModel = new BlacklistSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, 0, true); // 0 - неподтвержденные долги

        return $this->render('debts', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'title' => 'Unconfirmed debts',
            'edit' => true,
        ]);
	}

	public function actionConfirmed()
	{
		$searchModel = new BlacklistSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, 2, true); // 1 - подтвержденные долги

        return $this->render('debts', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'title' => 'Confirmed debts',
            'edit' => false,
        ]);
	}

	public function actionCanceled()
	{
		$searchModel = new BlacklistSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, -1, true); // -1 - отмененные долги

        return $this->render('debts', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'title' => 'Canceled debts',
            'edit' => false,
        ]);
	}

	public function actionNew()
	{
		$newDebt = new Blacklist();
		if($_POST['Blacklist'])
		{
			
				$newDebt->attributes = $_POST['Blacklist'];
				$newDebt->creditor_id = Yii::$app->user->id;
				$newDebt->save();
				return Yii::$app->response->redirect(['debt/unconfirmed']);
			
		}

		return $this->render('new', [
			'newDebt' => $newDebt, 
			'UploadForm' => $UploadForm
			]);
	}
}