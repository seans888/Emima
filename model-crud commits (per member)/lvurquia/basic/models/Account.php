<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property integer $id
 * @property string $account_name
 * @property string $account_date_created
 * @property integer $employee_id
 * @property integer $attendee_id
 *
 * @property Attendee $attendee
 * @property Employee $employee
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'employee_id', 'attendee_id'], 'required'],
            [['id', 'employee_id', 'attendee_id'], 'integer'],
            [['account_date_created'], 'safe'],
            [['account_name'], 'string', 'max' => 45],
            [['attendee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Attendee::className(), 'targetAttribute' => ['attendee_id' => 'id']],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account_name' => 'Account Name',
            'account_date_created' => 'Account Date Created',
            'employee_id' => 'Employee ID',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }
}
