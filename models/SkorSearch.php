<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Skor;

/**
 * SkorSearch represents the model behind the search form of `app\models\Skor`.
 */
class SkorSearch extends Skor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['skor_id', 'nama_skor'], 'safe'],
            [['bobot_skor'], 'integer'],
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
        $query = Skor::find();

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
            'bobot_skor' => $this->bobot_skor,
        ]);

        $query->andFilterWhere(['like', 'skor_id', $this->skor_id])
            ->andFilterWhere(['like', 'nama_skor', $this->nama_skor]);

        return $dataProvider;
    }
}
