<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kuismaster;

/**
 * KuismasterSearch represents the model behind the search form of `app\models\Kuismaster`.
 */
class KuismasterSearch extends Kuismaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kuismaster_id', 'kgmaster_id', 'nip', 'siswa_id', 'jenis', 'tgl_pengisian'], 'safe'],
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
        $query = Kuismaster::find();

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
            'tgl_pengisian' => $this->tgl_pengisian,
        ]);

        $query->andFilterWhere(['like', 'kuismaster_id', $this->kuismaster_id])
            ->andFilterWhere(['like', 'kgmaster_id', $this->kgmaster_id])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'siswa_id', $this->siswa_id])
            ->andFilterWhere(['like', 'jenis', $this->jenis]);

        return $dataProvider;
    }
}
