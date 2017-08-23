<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Attendee;

/**
 * AttendeeSearch represents the model behind the search form about `app\models\Attendee`.
 */
class AttendeeSearch extends Attendee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'employee_id'], 'integer'],
            [['attendee_fname', 'attendee_Surname', 'attendee_password', 'attendee_email', 'attendee_birthdate', 'attendee_gender', 'attendee_contact_num', 'attendee_date_created'], 'safe'],
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
        $query = Attendee::find();

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
            'employee_id' => $this->employee_id,
        ]);

        $query->andFilterWhere(['like', 'attendee_fname', $this->attendee_fname])
            ->andFilterWhere(['like', 'attendee_Surname', $this->attendee_Surname])
            ->andFilterWhere(['like', 'attendee_password', $this->attendee_password])
            ->andFilterWhere(['like', 'attendee_email', $this->attendee_email])
            ->andFilterWhere(['like', 'attendee_birthdate', $this->attendee_birthdate])
            ->andFilterWhere(['like', 'attendee_gender', $this->attendee_gender])
            ->andFilterWhere(['like', 'attendee_contact_num', $this->attendee_contact_num])
            ->andFilterWhere(['like', 'attendee_date_created', $this->attendee_date_created]);

        return $dataProvider;
    }
}
