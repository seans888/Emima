<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "attendee_has_collaboration".
 *
 * @property integer $attendee_id
 * @property integer $collaboration_id
 * @property string $message
 *
 * @property Attendee $attendee
 * @property Collaboration $collaboration
 */
class AttendeeHasCollaboration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attendee_has_collaboration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attendee_id', 'collaboration_id'], 'required'],
            [['attendee_id', 'collaboration_id'], 'integer'],
            [['message'], 'string', 'max' => 140],
            [['attendee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Attendee::className(), 'targetAttribute' => ['attendee_id' => 'id']],
            [['collaboration_id'], 'exist', 'skipOnError' => true, 'targetClass' => Collaboration::className(), 'targetAttribute' => ['collaboration_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attendee_id' => 'Attendee ID',
            'collaboration_id' => 'Collaboration ID',
            'message' => 'Message',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendee()
    {
        return $this->hasOne(Attendee::className(), ['id' => 'attendee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollaboration()
    {
        return $this->hasOne(Collaboration::className(), ['id' => 'collaboration_id']);
    }
}
