<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\User;
use app\models\Admin;

/* @var $this yii\web\View */
/* @var $model app\models\Account */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

     <?= $form->field($model, "user_id")->dropDownList(
    ArrayHelper::map(User::find()->all(),'id','name'),
    ['prompt'=>'Select Information']
    ) ?>

    <?= $form->field($model, "admin_id")->dropDownList(
	ArrayHelper::map(Admin::find()->all(),'id','name'),
	['prompt'=>'Select Information']
	) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
