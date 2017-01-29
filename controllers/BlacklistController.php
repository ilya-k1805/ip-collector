<?php

namespace app\controllers;

use Yii;
use app\models\Blacklist;
use app\models\BlacklistSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BlacklistController implements the CRUD actions for Blacklist model.
 */
class BlacklistController extends Controller
{
    /**
     * Lists all Blacklist models.
     * @return mixed
     */
    public function actionIndex()
    {
        $session = Yii::$app->session;

        if(Yii::$app->request->post('cancel') === '')
        {
            return Yii::$app->response->redirect(['site/index']);
        }
        elseif(Yii::$app->request->post('accept') === '')
        {
            $session->set('blacklist_tou', true);
        }
        if(!$session->get('blacklist_tou'))
        {
            return $this->render('tou');
        }
        else
        {
            $searchModel = new BlacklistSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams, 1); // 1 - подтвержденный долги

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
        
    }

    /**
     * Finds the Blacklist model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Blacklist the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Blacklist::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
