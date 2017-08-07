<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Landmark */

$this->title = 'Create Landmark';
$this->params['breadcrumbs'][] = ['label' => 'Landmarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="landmark-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
