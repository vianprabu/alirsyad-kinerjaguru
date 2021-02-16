<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kg_master".
 *
 * @property string $kgmaster_id
 * @property string $nip
 * @property string $periode_id
 * @property string $tgl_penilaian
 * @property int $jml_tdkhadir
 *
 * @property KgDetail[] $kgDetails
 * @property Guru $nip0
 * @property Periode $periode
 * @property Kuismaster[] $kuismasters
 */
class KgMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kg_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kgmaster_id', 'nip', 'periode_id'], 'required'],
            [['tgl_penilaian'], 'safe'],
            [['jml_tdkhadir'], 'integer'],
            [['kgmaster_id', 'nip', 'periode_id'], 'string', 'max' => 20],
            [['kgmaster_id'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Guru::className(), 'targetAttribute' => ['nip' => 'nip']],
            [['periode_id'], 'exist', 'skipOnError' => true, 'targetClass' => Periode::className(), 'targetAttribute' => ['periode_id' => 'periode_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kgmaster_id' => 'Kinerja Guru Master ID',
            'nip' => 'NIP',
            'periode_id' => 'Periode ID',
            'tgl_penilaian' => 'Tanggal Penilaian',
            'jml_tdkhadir' => 'Jumlah Tidak hadir',
        ];
    }

    /**
     * Gets query for [[KgDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKgDetails()
    {
        return $this->hasMany(KgDetail::className(), ['kgmaster_id' => 'kgmaster_id']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGuru()
    {
        return $this->hasOne(Guru::className(), ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Periode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriode()
    {
        return $this->hasOne(Periode::className(), ['periode_id' => 'periode_id']);
    }

    /**
     * Gets query for [[Kuismasters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKuismasters()
    {
        return $this->hasMany(Kuismaster::className(), ['kgmaster_id' => 'kgmaster_id']);
    }
}
