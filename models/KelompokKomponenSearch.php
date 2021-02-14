<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KelompokKomponen;

/**
 * KelompokKomponenSearch represents the model behind the search form of `app\models\KelompokKomponen`.
 */
class KelompokKomponenSearch extends KelompokKomponen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kelkompo_id', 'nama_kelkompo'], 'safe'],
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
        $query = KelompokKomponen::find();

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
        $query->andFilterWhere(['like', 'kelkompo_id', $this->kelkompo_id])
            ->andFilterWhere(['like', 'nama_kelkompo', $this->nama_kelkompo]);

        return $dataProvider;
    }
}
