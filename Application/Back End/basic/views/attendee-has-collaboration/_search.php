<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AttendeeHasCollaborationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attendee-has-collaboration-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'attendee_id') ?>

    <?= $form->field($model, 'collaboration_id') ?>

    <?= $form->field($model, 'message') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
