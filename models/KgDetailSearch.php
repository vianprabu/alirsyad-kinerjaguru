<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KgDetail;

/**
 * KgDetailSearch represents the model behind the search form of `app\models\KgDetail`.
 */
class KgDetailSearch extends KgDetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kgdetail_id', 'kgmaster_id', 'indikator_id', 'skor_id', 'tgl_nilai', 'penilai'], 'safe'],
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
        $query = KgDetail::find();

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
            'tgl_nilai' => $this->tgl_nilai,
        ]);

        $query->andFilterWhere(['like', 'kgdetail_id', $this->kgdetail_id])
            ->andFilterWhere(['like', 'kgmaster_id', $this->kgmaster_id])
            ->andFilterWhere(['like', 'indikator_id', $this->indikator_id])
            ->andFilterWhere(['like', 'skor_id', $this->skor_id])
            ->andFilterWhere(['like', 'penilai', $this->penilai]);

        return $dataProvider;
    }
}
