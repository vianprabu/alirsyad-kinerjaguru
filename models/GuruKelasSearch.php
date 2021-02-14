<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GuruKelas;

/**
 * GuruKelasSearch represents the model behind the search form of `app\models\GuruKelas`.
 */
class GuruKelasSearch extends GuruKelas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gk_id'], 'integer'],
            [['kelas_id', 'nip'], 'safe'],
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
        $query = GuruKelas::find();

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
            'gk_id' => $this->gk_id,
        ]);

        $query->andFilterWhere(['like', 'kelas_id', $this->kelas_id])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
