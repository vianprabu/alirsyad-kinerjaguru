<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guru".
 *
 * @property string $nip
 * @property string $instansi_id
 * @property string $nama_guru
 * @property string $nuptk
 * @property string $tempat_tgllahir
 * @property string $jabatan
 * @property string $tmt
 * @property string $masa_kerja
 * @property string $jn_kelamin
 * @property string $pend_terakhir
 * @property string $bidang
 *
 * @property Instansi $instansi
 * @property KgMaster[] $kgMasters
 */
class Guru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'instansi_id', 'nama_guru', 'nuptk', 'tempat','tgl_lahir', 'jabatan', 'tmt', 'masa_kerja', 'jn_kelamin', 'pend_terakhir', 'bidang'], 'required'],
            [['nip', 'instansi_id', 'nuptk', 'tempat','jabatan', 'masa_kerja', 'pend_terakhir', 'bidang'], 'string', 'max' => 20],
            [['nama_guru'], 'string', 'max' => 30],
            [['tgl_lahir','tmt'], 'safe'],
            [['jn_kelamin'], 'string', 'max' => 10],
            [['nip'], 'unique'],
            [['instansi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Instansi::className(), 'targetAttribute' => ['instansi_id' => 'instansi_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_guru' => 'Nama',
            'nip' => 'NIP',
            'instansi_id' => 'Instansi ID',
            'instansi.nama_instansi' => 'Nama Instansi',
            'nuptk' => 'NUPTK',
            'tempat' => 'Tempat',
            'tgl_lahir' => 'Tanggal Lahir',
            'jabatan' => 'Jabatan',
            'tmt' => 'TMT',
            'masa_kerja' => 'Masa Kerja',
            'jn_kelamin' => 'Jenis Kelamin',
            'pend_terakhir' => 'Pendidikan Terakhir',
            'bidang' => 'Bidang',
        ];
    }

    /**
     * Gets query for [[Instansi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInstansi()
    {
        return $this->hasOne(Instansi::className(), ['instansi_id' => 'instansi_id']);
    }

    /**
     * Gets query for [[KgMasters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKgMasters()
    {
        return $this->hasMany(KgMaster::className(), ['nip' => 'nip']);
    }
}
