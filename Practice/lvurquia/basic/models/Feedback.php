<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $id
 * @property string $feedback_rating
 * @property string $feedback_comment
 * @property integer $user_id
 * @property integer $admin_id
 *
 * @property Admin $admin
 * @property User $user
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'admin_id'], 'required'],
            [['id', 'user_id', 'admin_id'], 'integer'],
            [['feedback_rating', 'feedback_comment'], 'string', 'max' => 45],
            [['admin_id'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['admin_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'feedback_rating' => 'Feedback Rating',
            'feedback_comment' => 'Feedback Comment',
            'user_id' => 'User ID',
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
