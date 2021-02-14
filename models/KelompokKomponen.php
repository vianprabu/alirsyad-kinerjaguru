<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelompok_komponen".
 *
 * @property string $kelkompo_id
 * @property string $nama_kelkompo
 *
 * @property Komponen[] $komponens
 */
class KelompokKomponen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelompok_komponen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kelkompo_id', 'nama_kelkompo'], 'required'],
            [['kelkompo_id'], 'string', 'max' => 1],
            [['nama_kelkompo'], 'string', 'max' => 30],
            [['kelkompo_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kelkompo_id' => 'Kelompok Komponen ID',
            'nama_kelkompo' => 'Nama Kelompok Komponen',
        ];
    }

    /**
     * Gets query for [[Komponens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKomponens()
    {
        return $this->hasMany(Komponen::className(), ['kelkompo_id' => 'kelkompo_id']);
    }
}
