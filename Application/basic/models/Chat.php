<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chat".
 *
 * @property integer $id
 * @property string $user_name
 * @property string $user2_name
 * @property string $time
 * @property integer $user_id
 *
 * @property User $user
 * @property ChatHasReply[] $chatHasReplies
 * @property Reply[] $replies
 */
class Chat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'user2_name', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['user_name', 'user2_name', 'time'], 'string', 'max' => 45],
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
            'user_name' => 'User Name',
            'user2_name' => 'User2 Name',
            'time' => 'Time',
            'user_id' => 'User Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChatHasReplies()
    {
        return $this->hasMany(ChatHasReply::className(), ['chat_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReplies()
    {
        return $this->hasMany(Reply::className(), ['id' => 'reply_id', 'user_id' => 'reply_user_id'])->viaTable('chat_has_reply', ['chat_id' => 'id']);
    }
}
