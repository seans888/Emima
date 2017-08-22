<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EventHasRoom */

$this->title = 'Create Event Has Room';
$this->params['breadcrumbs'][] = ['label' => 'Event Has Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-has-room-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
