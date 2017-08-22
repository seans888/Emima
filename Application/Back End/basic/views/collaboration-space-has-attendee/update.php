<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CollaborationSpaceHasAttendee */

$this->title = 'Update Collaboration Space Has Attendee: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Collaboration Space Has Attendees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="collaboration-space-has-attendee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
