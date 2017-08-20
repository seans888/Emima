<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AttendeeHasCollaboration */

$this->title = $model->attendee_id;
$this->params['breadcrumbs'][] = ['label' => 'Attendee Has Collaborations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attendee-has-collaboration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'attendee_id' => $model->attendee_id, 'collaboration_id' => $model->collaboration_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'attendee_id' => $model->attendee_id, 'collaboration_id' => $model->collaboration_id], [
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
            'attendee_id',
            'collaboration_id',
            'message',
        ],
    ]) ?>

</div>
