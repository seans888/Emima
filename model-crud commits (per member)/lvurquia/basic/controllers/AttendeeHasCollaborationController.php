<?php

namespace app\controllers;

use Yii;
use app\models\AttendeeHasCollaboration;
use app\models\AttendeeHasCollaborationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AttendeeHasCollaborationController implements the CRUD actions for AttendeeHasCollaboration model.
 */
class AttendeeHasCollaborationController extends Controller
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
     * Lists all AttendeeHasCollaboration models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AttendeeHasCollaborationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AttendeeHasCollaboration model.
     * @param integer $attendee_id
     * @param integer $collaboration_id
     * @return mixed
     */
    public function actionView($attendee_id, $collaboration_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($attendee_id, $collaboration_id),
        ]);
    }

    /**
     * Creates a new AttendeeHasCollaboration model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AttendeeHasCollaboration();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'attendee_id' => $model->attendee_id, 'collaboration_id' => $model->collaboration_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AttendeeHasCollaboration model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $attendee_id
     * @param integer $collaboration_id
     * @return mixed
     */
    public function actionUpdate($attendee_id, $collaboration_id)
    {
        $model = $this->findModel($attendee_id, $collaboration_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'attendee_id' => $model->attendee_id, 'collaboration_id' => $model->collaboration_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AttendeeHasCollaboration model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $attendee_id
     * @param integer $collaboration_id
     * @return mixed
     */
    public function actionDelete($attendee_id, $collaboration_id)
    {
        $this->findModel($attendee_id, $collaboration_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AttendeeHasCollaboration model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $attendee_id
     * @param integer $collaboration_id
     * @return AttendeeHasCollaboration the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($attendee_id, $collaboration_id)
    {
        if (($model = AttendeeHasCollaboration::findOne(['attendee_id' => $attendee_id, 'collaboration_id' => $collaboration_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
