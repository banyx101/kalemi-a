<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reservation;

/**
 * ReservationSearch represents the model behind the search form about `app\models\Reservation`.
 */
class ReservationSearch extends Reservation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'client', 'packageservice', 'created_by', 'updated_by'], 'integer'],
            [['priceoffer', 'finalprice', 'amount_paid', 'cost'], 'number'],
            [['fullypaid', 'closed_deal', 'updated_at'], 'safe'],
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
        $query = Reservation::find();

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
            'packageservice' => $this->packageservice,
            'priceoffer' => $this->priceoffer,
            'finalprice' => $this->finalprice,
            'amount_paid' => $this->amount_paid,
            'cost' => $this->cost,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'fullypaid', $this->fullypaid])
            ->andFilterWhere(['like', 'closed_deal', $this->closed_deal]);

        return $dataProvider;
    }
}
