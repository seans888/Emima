<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chat_has_reply".
 *
 * @property integer $chat_id
 * @property integer $reply_id
 * @property integer $reply_user_id
 *
 * @property Chat $chat
 * @property Reply $reply
 */
class ChatHasReply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chat_has_reply';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chat_id', 'reply_id', 'reply_user_id'], 'required'],
            [['chat_id', 'reply_id', 'reply_user_id'], 'integer'],
            [['chat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Chat::className(), 'targetAttribute' => ['chat_id' => 'id']],
            [['reply_id', 'reply_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Reply::className(), 'targetAttribute' => ['reply_id' => 'id', 'reply_user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'chat_id' => 'Chat ID',
            'reply_id' => 'Reply ID',
            'reply_user_id' => 'Reply User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChat()
    {
        return $this->hasOne(Chat::className(), ['id' => 'chat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReply()
    {
        return $this->hasOne(Reply::className(), ['id' => 'reply_id', 'user_id' => 'reply_user_id']);
    }
}
