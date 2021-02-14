<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pernyataan;

/**
 * PernyataanSearch represents the model behind the search form of `app\models\Pernyataan`.
 */
class PernyataanSearch extends Pernyataan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pernyataan_id', 'komponen_id', 'nama_pernyataan'], 'safe'],
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
        $query = Pernyataan::find();

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
        $query->andFilterWhere(['like', 'pernyataan_id', $this->pernyataan_id])
            ->andFilterWhere(['like', 'komponen_id', $this->komponen_id])
            ->andFilterWhere(['like', 'nama_pernyataan', $this->nama_pernyataan]);

        return $dataProvider;
    }
}
