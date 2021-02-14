<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kuisdetail".
 *
 * @property string $kuisdetail_id
 * @property string $kuismaster_id
 * @property string $pernyataan_id
 * @property string $nilai_id
 *
 * @property Kuismaster $kuismaster
 * @property Nilai $nilai
 * @property Pernyataan $pernyataan
 */
class Kuisdetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kuisdetail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kuisdetail_id', 'kuismaster_id', 'pernyataan_id', 'nilai_id'], 'required'],
            [['kuisdetail_id'], 'string', 'max' => 20],
            [['kuismaster_id'], 'string', 'max' => 50],
            [['pernyataan_id'], 'string', 'max' => 5],
            [['nilai_id'], 'string', 'max' => 10],
            [['kuisdetail_id'], 'unique'],
            [['kuismaster_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kuismaster::className(), 'targetAttribute' => ['kuismaster_id' => 'kuismaster_id']],
            [['nilai_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nilai::className(), 'targetAttribute' => ['nilai_id' => 'nilai_id']],
            [['pernyataan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pernyataan::className(), 'targetAttribute' => ['pernyataan_id' => 'pernyataan_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kuisdetail_id' => 'Kuis Detail ID',
            'kuismaster_id' => 'Kuis Master ID',
            'pernyataan_id' => 'Pernyataan ID',
            'nilai_id' => 'Nilai ID',
        ];
    }

    /**
     * Gets query for [[Kuismaster]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKuismaster()
    {
        return $this->hasOne(Kuismaster::className(), ['kuismaster_id' => 'kuismaster_id']);
    }

    /**
     * Gets query for [[Nilai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNilai()
    {
        return $this->hasOne(Nilai::className(), ['nilai_id' => 'nilai_id']);
    }

    /**
     * Gets query for [[Pernyataan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPernyataan()
    {
        return $this->hasOne(Pernyataan::className(), ['pernyataan_id' => 'pernyataan_id']);
    }
}
