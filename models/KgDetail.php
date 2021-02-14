<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kg_detail".
 *
 * @property string $kgdetail_id
 * @property string $kgmaster_id
 * @property string $indikator_id
 * @property string $skor_id
 * @property string $tgl_nilai
 * @property string $penilai
 *
 * @property DatadukungKg[] $datadukungKgs
 * @property Indikator $indikator
 * @property KgMaster $kgmaster
 * @property Skor $skor
 */
class KgDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kg_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kgdetail_id', 'kgmaster_id', 'indikator_id', 'skor_id', 'penilai'], 'required'],
            [['tgl_nilai'], 'safe'],
            [['kgdetail_id', 'kgmaster_id'], 'string', 'max' => 20],
            [['indikator_id'], 'string', 'max' => 15],
            [['skor_id'], 'string', 'max' => 10],
            [['penilai'], 'string', 'max' => 30],
            [['kgdetail_id'], 'unique'],
            [['indikator_id'], 'exist', 'skipOnError' => true, 'targetClass' => Indikator::className(), 'targetAttribute' => ['indikator_id' => 'indikator_id']],
            [['kgmaster_id'], 'exist', 'skipOnError' => true, 'targetClass' => KgMaster::className(), 'targetAttribute' => ['kgmaster_id' => 'kgmaster_id']],
            [['skor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Skor::className(), 'targetAttribute' => ['skor_id' => 'skor_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kgdetail_id' => 'Kinerja Guru detail ID',
            'kgmaster_id' => 'Kinerja Guru master ID',
            'indikator_id' => 'Indikator ID',
            'skor_id' => 'Skor ID',
            'tgl_nilai' => 'Tanggal Nilai',
            'penilai' => 'Penilai',
        ];
    }

    /**
     * Gets query for [[DatadukungKgs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatadukungKgs()
    {
        return $this->hasMany(DatadukungKg::className(), ['kgdetail_id' => 'kgdetail_id']);
    }

    /**
     * Gets query for [[Indikator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIndikator()
    {
        return $this->hasOne(Indikator::className(), ['indikator_id' => 'indikator_id']);
    }

    /**
     * Gets query for [[Kgmaster]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKgmaster()
    {
        return $this->hasOne(KgMaster::className(), ['kgmaster_id' => 'kgmaster_id']);
    }

    /**
     * Gets query for [[Skor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkor()
    {
        return $this->hasOne(Skor::className(), ['skor_id' => 'skor_id']);
    }
}
