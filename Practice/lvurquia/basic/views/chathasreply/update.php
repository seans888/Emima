<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chathasreply */

$this->title = 'Update Chathasreply: ' . $model->chat_id;
$this->params['breadcrumbs'][] = ['label' => 'Chathasreplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->chat_id, 'url' => ['view', 'chat_id' => $model->chat_id, 'reply_id' => $model->reply_id, 'reply_user_id' => $model->reply_user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chathasreply-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
