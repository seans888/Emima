<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Admin;
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

      <?= $form->field($model, "admin_id")->dropDownList(
    ArrayHelper::map(Admin::find()->all(),'id','name'),
    ['prompt'=>'Select Information']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
