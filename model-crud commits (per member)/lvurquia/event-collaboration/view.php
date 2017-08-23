<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EventCollaboration */

$this->title = $model->collaboration_id;
$this->params['breadcrumbs'][] = ['label' => 'Event Collaborations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-collaboration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->collaboration_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->collaboration_id], [
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
            'collaboration_id',
            'message',
            'date',
            'time',
            'attendee_id',
            'event_id',
        ],
    ]) ?>

</div>
