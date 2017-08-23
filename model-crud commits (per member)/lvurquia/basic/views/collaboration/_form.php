<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Event;

/* @var $this yii\web\View */
/* @var $model app\models\Collaboration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="collaboration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, "event_id")->dropDownList(
   ArrayHelper::map(Event::find()->all(),'id','name'),
   ['prompt'=>'Select Information']
   ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
