<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property string $room_name
 * @property string $room_type
 * @property string $room_desc
 * @property integer $room_capacity
 * @property integer $venue_id
 *
 * @property EventHasRoom[] $eventHasRooms
 * @property Venue $venue
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_capacity', 'venue_id'], 'integer'],
            [['venue_id'], 'required'],
            [['room_name', 'room_type', 'room_desc'], 'string', 'max' => 45],
            [['venue_id'], 'exist', 'skipOnError' => true, 'targetClass' => Venue::className(), 'targetAttribute' => ['venue_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_name' => 'Room Name',
            'room_type' => 'Room Type',
            'room_desc' => 'Room Desc',
            'room_capacity' => 'Room Capacity',
            'venue_id' => 'Venue ID',
        ];
    }
    public function getName()
    {
        return $this->room_name;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventHasRooms()
    {
        return $this->hasMany(EventHasRoom::className(), ['room_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVenue()
    {
        return $this->hasOne(Venue::className(), ['id' => 'venue_id']);
    }
}
