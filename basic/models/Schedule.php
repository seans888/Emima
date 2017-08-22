<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property integer $id
 * @property string $conference_name
 * @property string $conference_speaker
 * @property string $conference_date
 * @property string $conference_time
 * @property string $conference_venue
 * @property integer $admin_id
 *
 * @property Admin $admin
 * @property UserHasSchedule[] $userHasSchedules
 * @property User[] $users
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['conference_name', 'conference_speaker', 'admin_id'], 'required'],
            [['conference_date'], 'safe'],
            [['admin_id'], 'integer'],
            [['conference_name', 'conference_speaker', 'conference_time', 'conference_venue'], 'string', 'max' => 45],
            [['admin_id'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['admin_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'conference_name' => 'Conference Name',
            'conference_speaker' => 'Conference Speaker',
            'conference_date' => 'Conference Date',
            'conference_time' => 'Conference Time',
            'conference_venue' => 'Conference Venue',
            'admin_id' => 'Admin ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmin()
    {
        return $this->hasOne(Admin::className(), ['id' => 'admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserHasSchedules()
    {
        return $this->hasMany(UserHasSchedule::className(), ['schedule_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id' => 'user_id'])->viaTable('user_has_schedule', ['schedule_id' => 'id']);
    }
}
