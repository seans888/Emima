<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserHasSchedule */

$this->title = 'Update User Has Schedule: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'User Has Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'user_id' => $model->user_id, 'schedule_id' => $model->schedule_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-has-schedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
