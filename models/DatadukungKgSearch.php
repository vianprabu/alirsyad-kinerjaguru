<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DatadukungKg;

/**
 * DatadukungKgSearch represents the model behind the search form of `app\models\DatadukungKg`.
 */
class DatadukungKgSearch extends DatadukungKg
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datadukung_id'], 'integer'],
            [['kgdetail_id', 'nama_file', 'tgl_upload'], 'safe'],
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
        $query = DatadukungKg::find();

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
            'datadukung_id' => $this->datadukung_id,
            'tgl_upload' => $this->tgl_upload,
        ]);

        $query->andFilterWhere(['like', 'kgdetail_id', $this->kgdetail_id])
            ->andFilterWhere(['like', 'nama_file', $this->nama_file]);

        return $dataProvider;
    }
}
