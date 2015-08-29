<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinusahatokomodern".
 *
 * @property integer $id_iutp
 * @property integer $id_akun
 * @property string $nomor_iutp
 * @property string $nama_iutp
 * @property string $alamat_iutp
 * @property string $tglPermohonan_iutp
 * @property string $nomorPermohonan_iutp
 * @property string $noTelepon_iutp
 * @property string $namaPerusahaan_iutp
 * @property string $jenisUsaha_iutp
 * @property string $lokasiUsaha_iutp
 * @property string $tglDitetapkan_iutp
 * @property string $keterangan_iutp
 */
class Izinusahatokomodern extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinusahatokomodern';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun'], 'integer'],
            [['nomor_iutp', 'nama_iutp', 'alamat_iutp', 'tglPermohonan_iutp', 'nomorPermohonan_iutp', 'noTelepon_iutp', 'namaPerusahaan_iutp', 'jenisUsaha_iutp', 'lokasiUsaha_iutp', 'tglDitetapkan_iutp'], 'required'],
            [['tglPermohonan_iutp', 'tglDitetapkan_iutp'], 'safe'],
            [['keterangan_iutp'], 'string'],
            [['nomor_iutp', 'nama_iutp', 'nomorPermohonan_iutp', 'noTelepon_iutp', 'namaPerusahaan_iutp', 'jenisUsaha_iutp', 'lokasiUsaha_iutp'], 'string', 'max' => 50],
            [['alamat_iutp'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_iutp' => 'Id Iutp',
            'id_akun' => 'Id Akun',
            'nomor_iutp' => 'Nomor Iutp',
            'nama_iutp' => 'Nama Iutp',
            'alamat_iutp' => 'Alamat Iutp',
            'tglPermohonan_iutp' => 'Tgl Permohonan Iutp',
            'nomorPermohonan_iutp' => 'Nomor Permohonan Iutp',
            'noTelepon_iutp' => 'No Telepon Iutp',
            'namaPerusahaan_iutp' => 'Nama Perusahaan Iutp',
            'jenisUsaha_iutp' => 'Jenis Usaha Iutp',
            'lokasiUsaha_iutp' => 'Lokasi Usaha Iutp',
            'tglDitetapkan_iutp' => 'Tgl Ditetapkan Iutp',
            'keterangan_iutp' => 'Keterangan Iutp',
        ];
    }
}
