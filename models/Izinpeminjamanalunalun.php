<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinpeminjamanalunalun".
 *
 * @property integer $id_ipaa
 * @property integer $id_akun
 * @property string $nomor_ipaa
 * @property string $nama_ipaa
 * @property string $alamat_ipaa
 * @property string $tglPermohonan_ipaa
 * @property string $noPermohonan_ipaa
 * @property string $perihalPermohonan_ipaa
 * @property string $namaAcara_ipaa
 * @property string $tglAwalAcara_ipaa
 * @property string $tglAkhirAcara_ipaa
 * @property integer $jamAcara_ipaa
 * @property string $tglDitetapkan_ipaa
 * @property string $keterangan_ipaa
 */
class Izinpeminjamanalunalun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinpeminjamanalunalun';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun', 'jamAcara_ipaa'], 'integer'],
            [['nomor_ipaa', 'nama_ipaa', 'alamat_ipaa', 'tglPermohonan_ipaa', 'noPermohonan_ipaa', 'perihalPermohonan_ipaa', 'namaAcara_ipaa', 'tglAwalAcara_ipaa', 'tglAkhirAcara_ipaa', 'jamAcara_ipaa', 'tglDitetapkan_ipaa'], 'required'],
            [['tglPermohonan_ipaa', 'tglAwalAcara_ipaa', 'tglAkhirAcara_ipaa', 'tglDitetapkan_ipaa'], 'safe'],
            [['keterangan_ipaa'], 'string'],
            [['nomor_ipaa', 'nama_ipaa', 'noPermohonan_ipaa', 'perihalPermohonan_ipaa', 'namaAcara_ipaa'], 'string', 'max' => 50],
            [['alamat_ipaa'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ipaa' => 'Id Ipaa',
            'id_akun' => 'Id Akun',
            'nomor_ipaa' => 'Nomor Ipaa',
            'nama_ipaa' => 'Nama Ipaa',
            'alamat_ipaa' => 'Alamat Ipaa',
            'tglPermohonan_ipaa' => 'Tgl Permohonan Ipaa',
            'noPermohonan_ipaa' => 'No Permohonan Ipaa',
            'perihalPermohonan_ipaa' => 'Perihal Permohonan Ipaa',
            'namaAcara_ipaa' => 'Nama Acara Ipaa',
            'tglAwalAcara_ipaa' => 'Tgl Awal Acara Ipaa',
            'tglAkhirAcara_ipaa' => 'Tgl Akhir Acara Ipaa',
            'jamAcara_ipaa' => 'Jam Acara Ipaa',
            'tglDitetapkan_ipaa' => 'Tgl Ditetapkan Ipaa',
            'keterangan_ipaa' => 'Keterangan Ipaa',
        ];
    }
}
