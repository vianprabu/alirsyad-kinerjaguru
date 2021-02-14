<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelompok_kompetensi".
 *
 * @property string $kk_id
 * @property string $nama_kk
 *
 * @property Kompetensi[] $kompetensis
 */
class KelompokKompetensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelompok_kompetensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kk_id', 'nama_kk'], 'required'],
            [['kk_id'], 'string', 'max' => 1],
            [['nama_kk'], 'string', 'max' => 50],
            [['kk_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kk_id' => 'Kelompok Kompetensi ID',
            'nama_kk' => 'Nama Kelompok Kompetensi',
        ];
    }

    /**
     * Gets query for [[Kompetensis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKompetensis()
    {
        return $this->hasMany(Kompetensi::className(), ['kk_id' => 'kk_id']);
    }
}
