<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "periode".
 *
 * @property string $periode_id
 * @property string $nama_periode
 * @property int $is_aktif
 *
 * @property KgMaster[] $kgMasters
 */
class Periode extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'periode';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['periode_id', 'nama_periode', 'is_aktif'], 'required'],
            [['is_aktif'], 'integer'],
            [['periode_id'], 'string', 'max' => 10],
            [['nama_periode'], 'string', 'max' => 50],
            [['periode_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'periode_id' => 'Periode ID',
            'nama_periode' => 'Nama Periode',
            'is_aktif' => 'Is Aktif',
        ];
    }

    /**
     * Gets query for [[KgMasters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKgMasters()
    {
        return $this->hasMany(KgMaster::className(), ['periode_id' => 'periode_id']);
    }
}
