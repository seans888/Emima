<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EventCollaboration */

$this->title = 'Create Event Collaboration';
$this->params['breadcrumbs'][] = ['label' => 'Event Collaborations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-collaboration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
