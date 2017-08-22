<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CollaborationSpaceHasAttendee;

/**
 * CollaborationSpaceHasAttendeeSearch represents the model behind the search form about `app\models\CollaborationSpaceHasAttendee`.
 */
class CollaborationSpaceHasAttendeeSearch extends CollaborationSpaceHasAttendee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'attendee_id', 'collaboration_space_attendee_id'], 'integer'],
            [['message'], 'safe'],
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
        $query = CollaborationSpaceHasAttendee::find();

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
            'id' => $this->id,
            'attendee_id' => $this->attendee_id,
            'collaboration_space_attendee_id' => $this->collaboration_space_attendee_id,
        ]);

        $query->andFilterWhere(['like', 'message', $this->message]);

        return $dataProvider;
    }
}
