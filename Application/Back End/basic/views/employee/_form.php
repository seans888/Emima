<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_dept')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_position')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
