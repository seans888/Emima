<?php

namespace app\controllers;

use Yii;
use app\models\Chathasreply;
use app\models\ChathasreplySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChathasreplyController implements the CRUD actions for Chathasreply model.
 */
class ChathasreplyController extends Controller
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
     * Lists all Chathasreply models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChathasreplySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Chathasreply model.
     * @param integer $chat_id
     * @param integer $reply_id
     * @param integer $reply_user_id
     * @return mixed
     */
    public function actionView($chat_id, $reply_id, $reply_user_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($chat_id, $reply_id, $reply_user_id),
        ]);
    }

    /**
     * Creates a new Chathasreply model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Chathasreply();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'chat_id' => $model->chat_id, 'reply_id' => $model->reply_id, 'reply_user_id' => $model->reply_user_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Chathasreply model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $chat_id
     * @param integer $reply_id
     * @param integer $reply_user_id
     * @return mixed
     */
    public function actionUpdate($chat_id, $reply_id, $reply_user_id)
    {
        $model = $this->findModel($chat_id, $reply_id, $reply_user_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'chat_id' => $model->chat_id, 'reply_id' => $model->reply_id, 'reply_user_id' => $model->reply_user_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Chathasreply model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $chat_id
     * @param integer $reply_id
     * @param integer $reply_user_id
     * @return mixed
     */
    public function actionDelete($chat_id, $reply_id, $reply_user_id)
    {
        $this->findModel($chat_id, $reply_id, $reply_user_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Chathasreply model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $chat_id
     * @param integer $reply_id
     * @param integer $reply_user_id
     * @return Chathasreply the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($chat_id, $reply_id, $reply_user_id)
    {
        if (($model = Chathasreply::findOne(['chat_id' => $chat_id, 'reply_id' => $reply_id, 'reply_user_id' => $reply_user_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
