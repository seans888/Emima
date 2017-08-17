<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'conference_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conference_speaker')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conference_date')->textInput() ?>

    <?= $form->field($model, 'conference_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conference_venue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
