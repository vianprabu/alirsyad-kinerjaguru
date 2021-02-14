<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guru_kelas".
 *
 * @property int $gk_id
 * @property string $kelas_id
 * @property string $nip
 *
 * @property Kelas $kelas
 * @property Guru $nip0
 */
class GuruKelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guru_kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kelas_id', 'nip'], 'required'],
            [['kelas_id'], 'string', 'max' => 10],
            [['nip'], 'string', 'max' => 20],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kelas::className(), 'targetAttribute' => ['kelas_id' => 'kelas_id']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Guru::className(), 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gk_id' => 'Guru Kelas ID',
            'kelas_id' => 'Kelas ID',
            'nip' => 'NIP',
        ];
    }

    /**
     * Gets query for [[Kelas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(Kelas::className(), ['kelas_id' => 'kelas_id']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Guru::className(), ['nip' => 'nip']);
    }
}
