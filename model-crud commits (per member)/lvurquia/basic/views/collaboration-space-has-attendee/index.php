<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CollaborationSpaceHasAttendeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Collaboration Space Has Attendees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collaboration-space-has-attendee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Collaboration Space Has Attendee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'attendee_id',
            'collaboration_space_attendee_id',
            'message',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
