<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Newsfeed */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="newsfeed-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'newsfeed_post')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newsfeed_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attendee_id')->textInput() ?>

    <?= $form->field($model, 'event_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
