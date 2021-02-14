<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Indikator;

/**
 * IndikatorSearch represents the model behind the search form of `app\models\Indikator`.
 */
class IndikatorSearch extends Indikator
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['indikator_id', 'nama_indikator'], 'safe'],
            [['kompetensi_id'], 'integer'],
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
        $query = Indikator::find();

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
            'kompetensi_id' => $this->kompetensi_id,
        ]);

        $query->andFilterWhere(['like', 'indikator_id', $this->indikator_id])
            ->andFilterWhere(['like', 'nama_indikator', $this->nama_indikator]);

        return $dataProvider;
    }
}
