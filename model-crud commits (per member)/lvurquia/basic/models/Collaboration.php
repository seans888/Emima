<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "collaboration".
 *
 * @property integer $id
 * @property integer $event_id
 *
 * @property AttendeeHasCollaboration[] $attendeeHasCollaborations
 * @property Attendee[] $attendees
 * @property Event $event
 */
class Collaboration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'collaboration';
    }
    public function getName()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_id'], 'required'],
            [['event_id'], 'integer'],
            [['event_id'], 'exist', 'skipOnError' => true, 'targetClass' => Event::className(), 'targetAttribute' => ['event_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_id' => 'Event ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendeeHasCollaborations()
    {
        return $this->hasMany(AttendeeHasCollaboration::className(), ['collaboration_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendees()
    {
        return $this->hasMany(Attendee::className(), ['id' => 'attendee_id'])->viaTable('attendee_has_collaboration', ['collaboration_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Event::className(), ['id' => 'event_id']);
    }
}
