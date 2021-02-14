<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "komponen".
 *
 * @property string $komponen_id
 * @property string $kelkompo_id
 * @property string $nama_komponen
 *
 * @property KelompokKomponen $kelkompo
 * @property Pernyataan[] $pernyataans
 */
class Komponen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'komponen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['komponen_id', 'kelkompo_id', 'nama_komponen'], 'required'],
            [['komponen_id'], 'string', 'max' => 5],
            [['kelkompo_id'], 'string', 'max' => 1],
            [['nama_komponen'], 'string', 'max' => 50],
            [['komponen_id'], 'unique'],
            [['kelkompo_id'], 'exist', 'skipOnError' => true, 'targetClass' => KelompokKomponen::className(), 'targetAttribute' => ['kelkompo_id' => 'kelkompo_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'komponen_id' => 'Komponen ID',
            'kelkompo_id' => 'Kelompok Komponen ID',
            'nama_komponen' => 'Nama Komponen',
        ];
    }

    /**
     * Gets query for [[Kelkompo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKelkompo()
    {
        return $this->hasOne(KelompokKomponen::className(), ['kelkompo_id' => 'kelkompo_id']);
    }

    /**
     * Gets query for [[Pernyataans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPernyataans()
    {
        return $this->hasMany(Pernyataan::className(), ['komponen_id' => 'komponen_id']);
    }
}
