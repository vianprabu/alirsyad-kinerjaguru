<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Guru;

/**
 * GuruSearch represents the model behind the search form of `app\models\Guru`.
 */
class GuruSearch extends Guru
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'instansi_id', 'nama_guru', 'nuptk', 'tempat','tgl_lahir', 'jabatan', 'tmt', 'masa_kerja', 'jn_kelamin', 'pend_terakhir', 'bidang'], 'safe'],
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
        $query = Guru::find();

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
        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'instansi_id', $this->instansi_id])
            ->andFilterWhere(['like', 'nama_guru', $this->nama_guru])
            ->andFilterWhere(['like', 'nuptk', $this->nuptk])
            ->andFilterWhere(['like', 'tempat', $this->tempat])
            ->andFilterWhere(['like', 'tgl_lahir', $this->tgl_lahir])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'tmt', $this->tmt])
            ->andFilterWhere(['like', 'masa_kerja', $this->masa_kerja])
            ->andFilterWhere(['like', 'jn_kelamin', $this->jn_kelamin])
            ->andFilterWhere(['like', 'pend_terakhir', $this->pend_terakhir])
            ->andFilterWhere(['like', 'bidang', $this->bidang]);

        return $dataProvider;
    }
}
