<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Instansi;

/**
 * InstansiSearch represents the model behind the search form of `app\models\Instansi`.
 */
class InstansiSearch extends Instansi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['instansi_id', 'nama_instansi', 'telp', 'kepala_sekolah', 'kelurahan', 'kecamatan', 'kota'], 'safe'],
            [['provinsi'], 'integer'],
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
        $query = Instansi::find();

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
            'provinsi' => $this->provinsi,
        ]);

        $query->andFilterWhere(['like', 'instansi_id', $this->instansi_id])
            ->andFilterWhere(['like', 'nama_instansi', $this->nama_instansi])
            ->andFilterWhere(['like', 'telp', $this->telp])
            ->andFilterWhere(['like', 'kepala_sekolah', $this->kepala_sekolah])
            ->andFilterWhere(['like', 'kelurahan', $this->kelurahan])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'kota', $this->kota]);

        return $dataProvider;
    }
}
