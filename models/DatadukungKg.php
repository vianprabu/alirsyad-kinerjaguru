<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datadukung_kg".
 *
 * @property int $datadukung_id
 * @property string $kgdetail_id
 * @property resource $nama_file
 * @property string $tgl_upload
 *
 * @property KgDetail $kgdetail
 */
class DatadukungKg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datadukung_kg';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kgdetail_id', 'nama_file'], 'required'],
            [['nama_file'], 'safe'],
            [['tgl_upload'], 'safe'],
            [['kgdetail_id'], 'string', 'max' => 20],
            [['kgdetail_id'], 'exist', 'skipOnError' => true, 'targetClass' => KgDetail::className(), 'targetAttribute' => ['kgdetail_id' => 'kgdetail_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'datadukung_id' => 'Datadukung ID',
            'kgdetail_id' => 'Kgdetail ID',
            'nama_file' => 'Nama File',
            'tgl_upload' => 'Tgl Upload',
        ];
    }

    /**
     * Gets query for [[Kgdetail]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKgdetail()
    {
        return $this->hasOne(KgDetail::className(), ['kgdetail_id' => 'kgdetail_id']);
    }
}
