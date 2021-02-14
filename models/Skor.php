<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skor".
 *
 * @property string $skor_id
 * @property string $nama_skor
 * @property int $bobot_skor
 *
 * @property KgDetail[] $kgDetails
 */
class Skor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['skor_id', 'nama_skor', 'bobot_skor'], 'required'],
            [['bobot_skor'], 'integer'],
            [['skor_id'], 'string', 'max' => 10],
            [['nama_skor'], 'string', 'max' => 50],
            [['skor_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'skor_id' => 'Skor ID',
            'nama_skor' => 'Nama Skor',
            'bobot_skor' => 'Bobot Skor',
        ];
    }

    /**
     * Gets query for [[KgDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKgDetails()
    {
        return $this->hasMany(KgDetail::className(), ['skor_id' => 'skor_id']);
    }
}
