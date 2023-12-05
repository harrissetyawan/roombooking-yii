<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jadwal_peminjaman".
 *
 * @property int $id
 * @property int|null $id_ruang
 * @property string $tanggal
 * @property string $jam_mulai
 * @property string $jam_selesai
 * @property string $nama_peminjam
 * @property string|null $keperluan
 *
 * @property RuangRapat $ruang
 */
class JadwalPeminjaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jadwal_peminjaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ruang'], 'integer'],
            [['tanggal', 'jam_mulai', 'jam_selesai', 'nama_peminjam'], 'required'],
            [['tanggal', 'jam_mulai', 'jam_selesai'], 'safe'],
            [['keperluan'], 'string'],
            [['nama_peminjam'], 'string', 'max' => 255],
            [['id_ruang'], 'exist', 'skipOnError' => true, 'targetClass' => RuangRapat::class, 'targetAttribute' => ['id_ruang' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_ruang' => 'Id Ruang',
            'tanggal' => 'Tanggal',
            'jam_mulai' => 'Jam Mulai',
            'jam_selesai' => 'Jam Selesai',
            'nama_peminjam' => 'Nama Peminjam',
            'keperluan' => 'Keperluan',
        ];
    }

    /**
     * Gets query for [[Ruang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRuang()
    {
        return $this->hasOne(RuangRapat::class, ['id' => 'id_ruang']);
    }
}
