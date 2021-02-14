<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instansi".
 *
 * @property string $instansi_id
 * @property string $nama_instansi
 * @property string $telp
 * @property string $kepala_sekolah
 * @property string $kelurahan
 * @property string $kecamatan
 * @property string $kota
 * @property int $provinsi
 *
 * @property Guru[] $gurus
 */
class Instansi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instansi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['instansi_id', 'nama_instansi', 'telp', 'kepala_sekolah', 'kelurahan', 'kecamatan', 'kota', 'provinsi'], 'required'],
     
            [['instansi_id', 'nama_instansi', 'kepala_sekolah', 'kota', 'provinsi'], 'string', 'max' => 20],
            [['telp'], 'string', 'max' => 15],
            [['kelurahan', 'kecamatan'], 'string', 'max' => 50],
            [['instansi_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'instansi_id' => 'Instansi ID',
            'nama_instansi' => 'Nama Instansi / Sekolah',
            'telp' => 'Telp / Fax',
            'kepala_sekolah' => 'Kepala Sekolah',
            'kelurahan' => 'Kelurahan',
            'kecamatan' => 'Kecamatan',
            'kota' => 'Kabupaten / Kota',
            'provinsi' => 'Provinsi',
        ];
    }

    /**
     * Gets query for [[Gurus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGurus()
    {
        return $this->hasMany(Guru::className(), ['instansi_id' => 'instansi_id']);
    }
}
