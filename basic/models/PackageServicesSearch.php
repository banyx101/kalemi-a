<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PackageServices;

/**
 * PackageServicesSearch represents the model behind the search form about `app\models\PackageServices`.
 */
class PackageServicesSearch extends PackageServices
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'package', 'service', 'created_by', 'updated_by'], 'integer'],
            [['comments', 'start', 'end', 'updated_at'], 'safe'],
            [['default_price', 'cost'], 'number'],
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
        $query = PackageServices::find();

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
            'package' => $this->package,
            'service' => $this->service,
            'default_price' => $this->default_price,
            'start' => $this->start,
            'end' => $this->end,
            'cost' => $this->cost,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'comments', $this->comments]);

        return $dataProvider;
    }
}
