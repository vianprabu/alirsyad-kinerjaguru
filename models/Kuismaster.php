<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kuismaster".
 *
 * @property string $kuismaster_id
 * @property string $kgmaster_id
 * @property string $nip
 * @property string $siswa_id
 * @property string $jenis
 * @property string $tgl_pengisian
 *
 * @property Kuisdetail[] $kuisdetails
 * @property KgMaster $kgmaster
 * @property Siswa $siswa
 */
class Kuismaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kuismaster';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kuismaster_id',  'nip'], 'required'],
            [['jenis'], 'string'],
            [['tgl_pengisian'], 'safe'],
            [['kuismaster_id'], 'string', 'max' => 50],
            [['kgmaster_id'], 'string', 'max' => 20],
            [['nip', 'siswa_id'], 'string', 'max' => 10],
            [['kuismaster_id'], 'unique'],
            [['kgmaster_id'], 'exist', 'skipOnError' => true, 'targetClass' => KgMaster::className(), 'targetAttribute' => ['kgmaster_id' => 'kgmaster_id']],
            [['siswa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Siswa::className(), 'targetAttribute' => ['siswa_id' => 'siswa_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kuismaster_id' => 'Kuis Master ID',
            'kgmaster_id' => 'Kinerja Guru Master ID',
            'nip' => 'NIP',
            'siswa_id' => 'Siswa ID',
            'jenis' => 'Jenis (Sejawat/Siswa)',
            'tgl_pengisian' => 'Tanggal Pengisian',
        ];
    }

    /**
     * Gets query for [[Kuisdetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKuisdetails()
    {
        return $this->hasMany(Kuisdetail::className(), ['kuismaster_id' => 'kuismaster_id']);
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
     * Gets query for [[Siswa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSiswa()
    {
        return $this->hasOne(Siswa::className(), ['siswa_id' => 'siswa_id']);
    }
    
    public function getGuru()
    {
        return $this->hasOne(Guru::className(), ['nip' => 'nip']);
    }
}
