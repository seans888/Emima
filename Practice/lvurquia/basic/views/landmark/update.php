<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Landmark */

$this->title = 'Update Landmark: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Landmarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="landmark-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
