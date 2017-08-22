<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\EventHasRoom;
use app\models\Event;
/* @var $this yii\web\View */
/* @var $model app\models\EventSchedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_speaker')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_time')->textInput(['maxlength' => true]) ?>

       <?= $form->field($model, "event_has_room_id")->dropDownList(
   ArrayHelper::map(EventHasRoom::find()->all(),'id','name'),
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
