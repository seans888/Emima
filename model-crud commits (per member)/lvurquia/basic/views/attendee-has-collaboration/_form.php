<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Attendee;
use app\models\Collaboration;

/* @var $this yii\web\View */
/* @var $model app\models\AttendeeHasCollaboration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attendee-has-collaboration-form">

    <?php $form = ActiveForm::begin(); ?>

      <?= $form->field($model, "attendee_id")->dropDownList(
   ArrayHelper::map(Attendee::find()->all(),'id','name'),
   ['prompt'=>'Select Information']
   ) ?>

      <?= $form->field($model, "collaboration_id")->dropDownList(
   ArrayHelper::map(Collaboration::find()->all(),'id','name'),
   ['prompt'=>'Select Information']
   ) ?>

    <?= $form->field($model, 'message')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
