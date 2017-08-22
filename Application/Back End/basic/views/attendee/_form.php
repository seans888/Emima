<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Attendee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attendee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'attendee_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attendee_Surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attendee_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attendee_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attendee_birthdate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attendee_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attendee_contactnum')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
