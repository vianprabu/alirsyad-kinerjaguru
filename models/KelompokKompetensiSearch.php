<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KelompokKompetensi;

/**
 * KelompokKompetensiSearch represents the model behind the search form of `app\models\KelompokKompetensi`.
 */
class KelompokKompetensiSearch extends KelompokKompetensi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kk_id', 'nama_kk'], 'safe'],
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
        $query = KelompokKompetensi::find();

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
        $query->andFilterWhere(['like', 'kk_id', $this->kk_id])
            ->andFilterWhere(['like', 'nama_kk', $this->nama_kk]);

        return $dataProvider;
    }
}
