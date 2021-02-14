<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kompetensi".
 *
 * @property int $kompetensi_id
 * @property string $kk_id
 * @property string $nama_kompetensi
 *
 * @property Indikator[] $indikators
 * @property KelompokKompetensi $kk
 */
class Kompetensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kompetensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kk_id', 'nama_kompetensi'], 'required'],
            [['kk_id'], 'string', 'max' => 1],
            [['nama_kompetensi'], 'string', 'max' => 110],
            [['kk_id'], 'exist', 'skipOnError' => true, 'targetClass' => KelompokKompetensi::className(), 'targetAttribute' => ['kk_id' => 'kk_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kompetensi_id' => 'Kompetensi ID',
            'kk_id' => 'Kelompok Kompetensi ID',
            'nama_kompetensi' => 'Nama Kompetensi',
        ];
    }

    /**
     * Gets query for [[Indikators]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIndikators()
    {
        return $this->hasMany(Indikator::className(), ['kompetensi_id' => 'kompetensi_id']);
    }

    /**
     * Gets query for [[Kk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKk()
    {
        return $this->hasOne(KelompokKompetensi::className(), ['kk_id' => 'kk_id']);
    }
}
