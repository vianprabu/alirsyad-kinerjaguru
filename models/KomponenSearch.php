<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Komponen;

/**
 * KomponenSearch represents the model behind the search form of `app\models\Komponen`.
 */
class KomponenSearch extends Komponen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['komponen_id', 'kelkompo_id', 'nama_komponen'], 'safe'],
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
        $query = Komponen::find();

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
        $query->andFilterWhere(['like', 'komponen_id', $this->komponen_id])
            ->andFilterWhere(['like', 'kelkompo_id', $this->kelkompo_id])
            ->andFilterWhere(['like', 'nama_komponen', $this->nama_komponen]);

        return $dataProvider;
    }
}
