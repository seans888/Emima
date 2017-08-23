<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AttendeeHasCollaborationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Attendee Has Collaborations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attendee-has-collaboration-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Attendee Has Collaboration', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
            'attribute'=>'attendee_id',
            'value'=>'attendee.name'],
            'collaboration_id',
            'message',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
