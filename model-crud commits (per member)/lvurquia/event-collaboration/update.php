<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EventCollaboration */

$this->title = 'Update Event Collaboration: ' . $model->collaboration_id;
$this->params['breadcrumbs'][] = ['label' => 'Event Collaborations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->collaboration_id, 'url' => ['view', 'id' => $model->collaboration_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="event-collaboration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
