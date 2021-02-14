<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indikator".
 *
 * @property string $indikator_id
 * @property int $kompetensi_id
 * @property string $nama_indikator
 *
 * @property Kompetensi $kompetensi
 * @property KgDetail[] $kgDetails
 */
class Indikator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'indikator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['indikator_id', 'kompetensi_id', 'nama_indikator'], 'required'],
            [['kompetensi_id'], 'integer'],
            [['nama_indikator'], 'string'],
            [['indikator_id'], 'string', 'max' => 15],
            [['indikator_id'], 'unique'],
            [['kompetensi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kompetensi::className(), 'targetAttribute' => ['kompetensi_id' => 'kompetensi_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'indikator_id' => 'Indikator ID',
            'kompetensi_id' => 'Kompetensi ID',
            'nama_indikator' => 'Nama Indikator',
        ];
    }

    /**
     * Gets query for [[Kompetensi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKompetensi()
    {
        return $this->hasOne(Kompetensi::className(), ['kompetensi_id' => 'kompetensi_id']);
    }

    /**
     * Gets query for [[KgDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKgDetails()
    {
        return $this->hasMany(KgDetail::className(), ['indikator_id' => 'indikator_id']);
    }
}
