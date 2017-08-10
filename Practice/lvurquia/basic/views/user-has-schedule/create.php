<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserHasSchedule */

$this->title = 'Create User Has Schedule';
$this->params['breadcrumbs'][] = ['label' => 'User Has Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-has-schedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
