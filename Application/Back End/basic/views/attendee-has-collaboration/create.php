<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AttendeeHasCollaboration */

$this->title = 'Create Attendee Has Collaboration';
$this->params['breadcrumbs'][] = ['label' => 'Attendee Has Collaborations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attendee-has-collaboration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
