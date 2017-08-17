<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property integer $id
 * @property string $admin_name
 * @property string $admin_surname
 * @property integer $admin_contact_num
 *
 * @property Account[] $accounts
 * @property Feedback[] $feedbacks
 * @property Schedule[] $schedules
 */
class admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_contact_num'], 'integer'],
            [['admin_name', 'admin_surname'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'admin_name' => 'Admin Name',
            'admin_surname' => 'Admin Surname',
            'admin_contact_num' => 'Admin Contact Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccounts()
    {
        return $this->hasMany(Account::className(), ['admin_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbacks()
    {
        return $this->hasMany(Feedback::className(), ['admin_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['admin_id' => 'id']);
    }
}
