<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AttendeeHasCollaboration */

$this->title = 'Update Attendee Has Collaboration: ' . $model->attendee_id;
$this->params['breadcrumbs'][] = ['label' => 'Attendee Has Collaborations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->attendee_id, 'url' => ['view', 'attendee_id' => $model->attendee_id, 'collaboration_id' => $model->collaboration_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="attendee-has-collaboration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
