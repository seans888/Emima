<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChathasreplySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chathasreplies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chathasreply-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Chathasreply', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'chat_id',
            'reply_id',
            'reply_user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
