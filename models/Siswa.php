<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property string $siswa_id
 * @property string $kelas_id
 * @property string $nama_siswa
 *
 * @property Kuismaster[] $kuismasters
 * @property Kelas $kelas
 */
class Siswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['siswa_id', 'kelas_id', 'nama_siswa'], 'required'],
            [['siswa_id', 'kelas_id'], 'string', 'max' => 10],
            [['nama_siswa'], 'string', 'max' => 50],
            [['siswa_id'], 'unique'],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kelas::className(), 'targetAttribute' => ['kelas_id' => 'kelas_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'siswa_id' => 'Siswa ID',
            'kelas_id' => 'Kelas ID',
            'nama_siswa' => 'Nama Siswa',
        ];
    }

    /**
     * Gets query for [[Kuismasters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKuismasters()
    {
        return $this->hasMany(Kuismaster::className(), ['siswa_id' => 'siswa_id']);
    }

    /**
     * Gets query for [[Kelas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(Kelas::className(), ['kelas_id' => 'kelas_id']);
    }
}
