<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Employee;
use app\models\Attendee;
use app\models\Event;


/* @var $this yii\web\View */
/* @var $model app\models\Feedback */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feedback-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'feedback_rating')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'feedback_comment')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, "attendee_id")->dropDownList(
   ArrayHelper::map(Attendee::find()->all(),'id','name'),
   ['prompt'=>'Select Information']
   ) ?>

      <?= $form->field($model, "employee_id")->dropDownList(
   ArrayHelper::map(Employee::find()->all(),'id','name'),
   ['prompt'=>'Select Information']
   ) ?>

      <?= $form->field($model, "event_id")->dropDownList(
   ArrayHelper::map(Event::find()->all(),'id','name'),
   ['prompt'=>'Select Information']
   ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
