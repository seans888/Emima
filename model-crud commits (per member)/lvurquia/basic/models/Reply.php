<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reply".
 *
 * @property integer $id
 * @property string $reply_text
 * @property string $time
 * @property string $status
 * @property integer $user_id
 *
 * @property ChatHasReply[] $chatHasReplies
 * @property Chat[] $chats
 * @property User $user
 */
class Reply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reply';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['reply_text', 'time', 'status'], 'string', 'max' => 45],
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
            'reply_text' => 'Reply Text',
            'time' => 'Time',
            'status' => 'Status',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChatHasReplies()
    {
        return $this->hasMany(ChatHasReply::className(), ['reply_id' => 'id', 'reply_user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChats()
    {
        return $this->hasMany(Chat::className(), ['id' => 'chat_id'])->viaTable('chat_has_reply', ['reply_id' => 'id', 'reply_user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
