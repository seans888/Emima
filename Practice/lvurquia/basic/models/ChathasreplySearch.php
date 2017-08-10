<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chathasreply;

/**
 * ChathasreplySearch represents the model behind the search form about `app\models\Chathasreply`.
 */
class ChathasreplySearch extends Chathasreply
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chat_id', 'reply_id', 'reply_user_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Chathasreply::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'chat_id' => $this->chat_id,
            'reply_id' => $this->reply_id,
            'reply_user_id' => $this->reply_user_id,
        ]);

        return $dataProvider;
    }
}
