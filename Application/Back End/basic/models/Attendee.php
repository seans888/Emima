<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "attendee".
 *
 * @property integer $id
 * @property string $attendee_fname
 * @property string $attendee_Surname
 * @property string $attendee_password
 * @property string $attendee_email
 * @property string $attendee_birthdate
 * @property string $attendee_gender
 * @property string $attendee_contactnum
 *
 * @property Account[] $accounts
 * @property AttendeeHasCollaboration[] $attendeeHasCollaborations
 * @property Collaboration[] $collaborations
 * @property CollaborationSpaceHasAttendee[] $collaborationSpaceHasAttendees
 * @property Feedback[] $feedbacks
 * @property Landmark[] $landmarks
 * @property Newsfeed[] $newsfeeds
 */
class Attendee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attendee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attendee_fname', 'attendee_email'], 'required'],
            [['attendee_fname', 'attendee_Surname', 'attendee_password', 'attendee_email', 'attendee_birthdate', 'attendee_gender', 'attendee_contactnum'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'attendee_fname' => 'Attendee Fname',
            'attendee_Surname' => 'Attendee  Surname',
            'attendee_password' => 'Attendee Password',
            'attendee_email' => 'Attendee Email',
            'attendee_birthdate' => 'Attendee Birthdate',
            'attendee_gender' => 'Attendee Gender',
            'attendee_contactnum' => 'Attendee Contactnum',
        ];
    }
    public function getName()
    {
        return $this->attendee_fname.' '.$this->attendee_Surname;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccounts()
    {
        return $this->hasMany(Account::className(), ['attendee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendeeHasCollaborations()
    {
        return $this->hasMany(AttendeeHasCollaboration::className(), ['attendee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollaborations()
    {
        return $this->hasMany(Collaboration::className(), ['id' => 'collaboration_id'])->viaTable('attendee_has_collaboration', ['attendee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollaborationSpaceHasAttendees()
    {
        return $this->hasMany(CollaborationSpaceHasAttendee::className(), ['attendee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbacks()
    {
        return $this->hasMany(Feedback::className(), ['attendee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLandmarks()
    {
        return $this->hasMany(Landmark::className(), ['attendee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsfeeds()
    {
        return $this->hasMany(Newsfeed::className(), ['attendee_id' => 'id']);
    }
}
