<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CollaborationSpaceHasAttendee */

$this->title = 'Create Collaboration Space Has Attendee';
$this->params['breadcrumbs'][] = ['label' => 'Collaboration Space Has Attendees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collaboration-space-has-attendee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
