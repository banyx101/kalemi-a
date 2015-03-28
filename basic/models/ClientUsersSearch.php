<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClientUsers;

/**
 * ClientUsersSearch represents the model behind the search form about `app\models\ClientUsers`.
 */
class ClientUsersSearch extends ClientUsers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'client', 'created_by', 'updated_by'], 'integer'],
            [['firstName', 'lastName', 'NIPT', 'branch', 'tel', 'cel', 'fax', 'email', 'city', 'address', 'updated_at'], 'safe'],
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
        $query = ClientUsers::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'client' => $this->client,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'NIPT', $this->NIPT])
            ->andFilterWhere(['like', 'branch', $this->branch])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'cel', $this->cel])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
