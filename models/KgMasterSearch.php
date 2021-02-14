<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KgMaster;

/**
 * KgMasterSearch represents the model behind the search form of `app\models\KgMaster`.
 */
class KgMasterSearch extends KgMaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kgmaster_id', 'nip', 'periode_id', 'tgl_penilaian'], 'safe'],
            [['jml_tdkhadir'], 'integer'],
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
        $query = KgMaster::find();

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
            'tgl_penilaian' => $this->tgl_penilaian,
            'jml_tdkhadir' => $this->jml_tdkhadir,
        ]);

        $query->andFilterWhere(['like', 'kgmaster_id', $this->kgmaster_id])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'periode_id', $this->periode_id]);

        return $dataProvider;
    }
}
