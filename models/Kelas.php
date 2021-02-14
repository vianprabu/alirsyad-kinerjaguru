<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property string $kelas_id
 * @property string $nama_kelas
 *
 * @property GuruKelas[] $guruKelas
 * @property Siswa[] $siswas
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kelas_id', 'nama_kelas'], 'required'],
            [['kelas_id'], 'string', 'max' => 10],
            [['nama_kelas'], 'string', 'max' => 20],
            [['kelas_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kelas_id' => 'Kelas ID',
            'nama_kelas' => 'Nama Kelas',
        ];
    }

    /**
     * Gets query for [[GuruKelas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGuruKelas()
    {
        return $this->hasMany(GuruKelas::className(), ['kelas_id' => 'kelas_id']);
    }

    /**
     * Gets query for [[Siswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(Siswa::className(), ['kelas_id' => 'kelas_id']);
    }
}
