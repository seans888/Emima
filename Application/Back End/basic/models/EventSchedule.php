<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event_schedule".
 *
 * @property integer $id
 * @property string $event_speaker
 * @property string $event_time
 * @property integer $event_has_room_id
 * @property integer $event_id
 *
 * @property Event $event
 * @property EventHasRoom $eventHasRoom
 */
class EventSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_has_room_id', 'event_id'], 'required'],
            [['event_has_room_id', 'event_id'], 'integer'],
            [['event_speaker', 'event_time'], 'string', 'max' => 45],
            [['event_id'], 'exist', 'skipOnError' => true, 'targetClass' => Event::className(), 'targetAttribute' => ['event_id' => 'id']],
            [['event_has_room_id'], 'exist', 'skipOnError' => true, 'targetClass' => EventHasRoom::className(), 'targetAttribute' => ['event_has_room_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_speaker' => 'Event Speaker',
            'event_time' => 'Event Time',
            'event_has_room_id' => 'Event Has Room ID',
            'event_id' => 'Event ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Event::className(), ['id' => 'event_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventHasRoom()
    {
        return $this->hasOne(EventHasRoom::className(), ['id' => 'event_has_room_id']);
    }
}
