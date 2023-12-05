<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ruang_rapat".
 *
 * @property int $id
 * @property string $nama_ruang
 *
 * @property JadwalPeminjaman[] $jadwalPeminjamen
 */
class RuangRapat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ruang_rapat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_ruang'], 'required'],
            [['nama_ruang'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_ruang' => 'Nama Ruang',
        ];
    }

    /**
     * Gets query for [[JadwalPeminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalPeminjamen()
    {
        return $this->hasMany(JadwalPeminjaman::class, ['id_ruang' => 'id']);
    }
}
