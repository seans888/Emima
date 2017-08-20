<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $emp_name
 * @property string $emp_surname
 * @property string $emp_dept
 * @property string $emp_position
 *
 * @property Event[] $events
 * @property Feedback[] $feedbacks
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
      public function getName()
    {
        return $this->emp_name.' '.$this->emp_surname;
    }

    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_name', 'emp_surname', 'emp_dept', 'emp_position'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_name' => 'Emp Name',
            'emp_surname' => 'Emp Surname',
            'emp_dept' => 'Emp Dept',
            'emp_position' => 'Emp Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Event::className(), ['employee_id' => 'id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbacks()
    {
        return $this->hasMany(Feedback::className(), ['employee_id' => 'id']);
    }

}
