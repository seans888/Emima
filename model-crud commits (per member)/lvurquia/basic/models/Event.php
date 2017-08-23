<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property string $event_name
 * @property string $event_venue
 * @property string $event_start_date
 * @property string $event_end_date
 * @property string $event_type
 * @property integer $employee_id
 * @property integer $venue_id
 *
 * @property Collaboration[] $collaborations
 * @property Employee $employee
 * @property Venue $venue
 * @property EventHasRoom[] $eventHasRooms
 * @property EventSchedule[] $eventSchedules
 * @property Feedback[] $feedbacks
 * @property Newsfeed[] $newsfeeds
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_start_date', 'event_end_date'], 'safe'],
            [['employee_id', 'venue_id'], 'required'],
            [['employee_id', 'venue_id'], 'integer'],
            [['event_name', 'event_venue'], 'string', 'max' => 120],
            [['event_type'], 'string', 'max' => 45],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
            [['venue_id'], 'exist', 'skipOnError' => true, 'targetClass' => Venue::className(), 'targetAttribute' => ['venue_id' => 'id']],
        ];
    }
    public function getName()
    {
        return $this->event_name;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_name' => 'Event Name',
            'event_venue' => 'Event Venue',
            'event_start_date' => 'Event Start Date',
            'event_end_date' => 'Event End Date',
            'event_type' => 'Event Type',
            'employee_id' => 'Employee ID',
            'venue_id' => 'Venue ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollaborations()
    {
        return $this->hasMany(Collaboration::className(), ['event_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVenue()
    {
        return $this->hasOne(Venue::className(), ['id' => 'venue_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventHasRooms()
    {
        return $this->hasMany(EventHasRoom::className(), ['event_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventSchedules()
    {
        return $this->hasMany(EventSchedule::className(), ['event_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbacks()
    {
        return $this->hasMany(Feedback::className(), ['event_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsfeeds()
    {
        return $this->hasMany(Newsfeed::className(), ['event_id' => 'id']);
    }
}
