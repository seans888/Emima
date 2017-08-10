<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Chathasreply */

$this->title = 'Create Chathasreply';
$this->params['breadcrumbs'][] = ['label' => 'Chathasreplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chathasreply-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
