<?php

namespace app\controllers;

use Yii;
use app\models\UserHasSchedule;
use app\models\UserHasScheduleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserHasScheduleController implements the CRUD actions for UserHasSchedule model.
 */
class UserHasScheduleController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all UserHasSchedule models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserHasScheduleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserHasSchedule model.
     * @param integer $user_id
     * @param integer $schedule_id
     * @return mixed
     */
    public function actionView($user_id, $schedule_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($user_id, $schedule_id),
        ]);
    }

    /**
     * Creates a new UserHasSchedule model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserHasSchedule();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user_id' => $model->user_id, 'schedule_id' => $model->schedule_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing UserHasSchedule model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $user_id
     * @param integer $schedule_id
     * @return mixed
     */
    public function actionUpdate($user_id, $schedule_id)
    {
        $model = $this->findModel($user_id, $schedule_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user_id' => $model->user_id, 'schedule_id' => $model->schedule_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing UserHasSchedule model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $user_id
     * @param integer $schedule_id
     * @return mixed
     */
    public function actionDelete($user_id, $schedule_id)
    {
        $this->findModel($user_id, $schedule_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UserHasSchedule model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $user_id
     * @param integer $schedule_id
     * @return UserHasSchedule the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($user_id, $schedule_id)
    {
        if (($model = UserHasSchedule::findOne(['user_id' => $user_id, 'schedule_id' => $schedule_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
