<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EventHasRoom */

$this->title = 'Update Event Has Room: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Event Has Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="event-has-room-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
