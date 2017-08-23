<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "landmark".
 *
 * @property integer $id
 * @property string $landmark_name
 * @property string $landmark_address
 * @property string $landmark_distance_from_attendee
 * @property integer $attendee_id
 *
 * @property Attendee $attendee
 */
class Landmark extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'landmark';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['landmark_distance_from_attendee', 'attendee_id'], 'required'],
            [['attendee_id'], 'integer'],
            [['landmark_name', 'landmark_address', 'landmark_distance_from_attendee'], 'string', 'max' => 45],
            [['attendee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Attendee::className(), 'targetAttribute' => ['attendee_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'landmark_name' => 'Landmark Name',
            'landmark_address' => 'Landmark Address',
            'landmark_distance_from_attendee' => 'Landmark Distance From Attendee',
            'attendee_id' => 'Attendee ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendee()
    {
        return $this->hasOne(Attendee::className(), ['id' => 'attendee_id']);
    }
}
