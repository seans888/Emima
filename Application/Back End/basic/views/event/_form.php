<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Employee;
use app\models\Venue;


/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_venue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_start_date')->textInput() ?>

    <?= $form->field($model, 'event_end_date')->textInput() ?>

    <?= $form->field($model, 'event_type')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, "employee_id")->dropDownList(
   ArrayHelper::map(Employee::find()->all(),'id','name'),
   ['prompt'=>'Select Information']
   ) ?>

    <?= $form->field($model, "venue_id")->dropDownList(
   ArrayHelper::map(Venue::find()->all(),'id','name'),
   ['prompt'=>'Select Information']
   ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
