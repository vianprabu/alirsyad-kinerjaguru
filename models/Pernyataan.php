<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pernyataan".
 *
 * @property string $pernyataan_id
 * @property string $komponen_id
 * @property string $nama_pernyataan
 *
 * @property Kuisdetail[] $kuisdetails
 * @property Komponen $komponen
 */
class Pernyataan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pernyataan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pernyataan_id', 'komponen_id', 'nama_pernyataan'], 'required'],
            [['nama_pernyataan'], 'string'],
            [['pernyataan_id', 'komponen_id'], 'string', 'max' => 5],
            [['pernyataan_id'], 'unique'],
            [['komponen_id'], 'exist', 'skipOnError' => true, 'targetClass' => Komponen::className(), 'targetAttribute' => ['komponen_id' => 'komponen_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pernyataan_id' => 'Pernyataan ID',
            'komponen_id' => 'Komponen ID',
            'nama_pernyataan' => 'Nama Pernyataan',
        ];
    }

    /**
     * Gets query for [[Kuisdetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKuisdetails()
    {
        return $this->hasMany(Kuisdetail::className(), ['pernyataan_id' => 'pernyataan_id']);
    }

    /**
     * Gets query for [[Komponen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKomponen()
    {
        return $this->hasOne(Komponen::className(), ['komponen_id' => 'komponen_id']);
    }
}
