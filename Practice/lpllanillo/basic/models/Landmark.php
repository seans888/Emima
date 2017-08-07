<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "landmark".
 *
 * @property integer $id
 * @property string $landmark_name
 * @property string $landmark_address
 * @property string $landmark_distance_from_user
 *
 * @property User[] $users
 */
class Landmark extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'landmark';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['landmark_name', 'landmark_address', 'landmark_distance_from_user'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'landmark_name' => 'Landmark Name',
            'landmark_address' => 'Landmark Address',
            'landmark_distance_from_user' => 'Landmark Distance From User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['landmark_id' => 'id']);
    }
}
