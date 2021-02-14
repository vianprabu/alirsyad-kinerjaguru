<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilai".
 *
 * @property string $nilai_id
 * @property string $nama_nilai
 * @property int $bobot_nilai
 *
 * @property Kuisdetail[] $kuisdetails
 */
class Nilai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nilai_id', 'nama_nilai', 'bobot_nilai'], 'required'],
            [['bobot_nilai'], 'integer'],
            [['nilai_id'], 'string', 'max' => 10],
            [['nama_nilai'], 'string', 'max' => 20],
            [['nilai_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nilai_id' => 'Nilai ID',
            'nama_nilai' => 'Nama Nilai',
            'bobot_nilai' => 'Bobot Nilai',
        ];
    }

    /**
     * Gets query for [[Kuisdetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKuisdetails()
    {
        return $this->hasMany(Kuisdetail::className(), ['nilai_id' => 'nilai_id']);
    }
}
