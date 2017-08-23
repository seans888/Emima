<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "venue".
 *
 * @property integer $id
 * @property string $venue_name
 * @property string $venue_address
 * @property string $venue_desc
 * @property integer $venue_contact_num
 *
 * @property Event[] $events
 * @property Room[] $rooms
 */
class Venue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'venue';
    }

    /**
     * @inheritdoc
     */
      public function getName()
    {
        return $this->venue_name;
    }

    public function rules()
    {
        return [
            [['venue_contact_num'], 'integer'],
            [['venue_name', 'venue_address', 'venue_desc'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'venue_name' => 'Venue Name',
            'venue_address' => 'Venue Address',
            'venue_desc' => 'Venue Desc',
            'venue_contact_num' => 'Venue Contact Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Event::className(), ['venue_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRooms()
    {
        return $this->hasMany(Room::className(), ['venue_id' => 'id']);
    }
}
