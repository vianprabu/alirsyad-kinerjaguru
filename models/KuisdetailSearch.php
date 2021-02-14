<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kuisdetail;

/**
 * KuisdetailSearch represents the model behind the search form of `app\models\Kuisdetail`.
 */
class KuisdetailSearch extends Kuisdetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kuisdetail_id', 'kuismaster_id', 'pernyataan_id', 'nilai_id'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Kuisdetail::find();

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
        $query->andFilterWhere(['like', 'kuisdetail_id', $this->kuisdetail_id])
            ->andFilterWhere(['like', 'kuismaster_id', $this->kuismaster_id])
            ->andFilterWhere(['like', 'pernyataan_id', $this->pernyataan_id])
            ->andFilterWhere(['like', 'nilai_id', $this->nilai_id]);

        return $dataProvider;
    }
}
