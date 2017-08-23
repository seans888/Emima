<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AttendeeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attendee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'attendee_fname') ?>

    <?= $form->field($model, 'attendee_Surname') ?>

    <?= $form->field($model, 'attendee_password') ?>

    <?= $form->field($model, 'attendee_email') ?>

    <?php // echo $form->field($model, 'attendee_birthdate') ?>

    <?php // echo $form->field($model, 'attendee_gender') ?>

    <?php // echo $form->field($model, 'attendee_contact_num') ?>

    <?php // echo $form->field($model, 'attendee_date_created') ?>

    <?php // echo $form->field($model, 'employee_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
