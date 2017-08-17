<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Chathasreply */

$this->title = $model->chat_id;
$this->params['breadcrumbs'][] = ['label' => 'Chathasreplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chathasreply-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'chat_id' => $model->chat_id, 'reply_id' => $model->reply_id, 'reply_user_id' => $model->reply_user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'chat_id' => $model->chat_id, 'reply_id' => $model->reply_id, 'reply_user_id' => $model->reply_user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'chat_id',
            'reply_id',
            'reply_user_id',
        ],
    ]) ?>

</div>
