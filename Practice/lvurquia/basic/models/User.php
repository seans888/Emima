<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $user_name
 * @property string $user_surname
 * @property string $user_email
 * @property integer $user_phone
 * @property integer $landmark_id
 *
 * @property Account[] $accounts
 * @property Chat[] $chats
 * @property Feedback[] $feedbacks
 * @property Reply[] $replies
 * @property Landmark $landmark
 * @property UserHasSchedule[] $userHasSchedules
 * @property Schedule[] $schedules
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'user_surname'], 'required'],
            [['user_phone', 'landmark_id'], 'integer'],
            [['user_name', 'user_surname', 'user_email'], 'string', 'max' => 45],
            [['landmark_id'], 'exist', 'skipOnError' => true, 'targetClass' => Landmark::className(), 'targetAttribute' => ['landmark_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_name' => 'User Name',
            'user_surname' => 'User Surname',
            'user_email' => 'User Email',
            'user_phone' => 'User Phone',
            'landmark_id' => 'Landmark ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccounts()
    {
        return $this->hasMany(Account::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChats()
    {
        return $this->hasMany(Chat::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbacks()
    {
        return $this->hasMany(Feedback::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReplies()
    {
        return $this->hasMany(Reply::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLandmark()
    {
        return $this->hasOne(Landmark::className(), ['id' => 'landmark_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserHasSchedules()
    {
        return $this->hasMany(UserHasSchedule::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['id' => 'schedule_id'])->viaTable('user_has_schedule', ['user_id' => 'id']);
    }
}
