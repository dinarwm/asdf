<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izingangguan".
 *
 * @property integer $id_ig
 * @property integer $id_akun
 * @property string $nomor_ig
 * @property string $namaPengusaha_ig
 * @property string $alamatPengusaha_ig
 * @property string $namaPerusahaan_ig
 * @property string $alamatPerusahaan_ig
 * @property string $tglPermohonan_ig
 * @property string $tglBeritaAcara_ig
 * @property string $atasTanahMilik_ig
 * @property string $statusTanah_ig
 * @property integer $luasTanah_ig
 * @property integer $luasBangunan_ig
 * @property string $lokasiTanah_ig
 * @property string $batasUtara_ig
 * @property string $batasTimur_ig
 * @property string $batasSelatan_ig
 * @property string $batasBarat_ig
 * @property string $tglDitetapkan_ig
 * @property string $keterangan_ig
 */
class Izingangguan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izingangguan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun', 'nomor_ig', 'namaPengusaha_ig', 'alamatPengusaha_ig', 'namaPerusahaan_ig', 'alamatPerusahaan_ig', 'tglPermohonan_ig', 'tglBeritaAcara_ig', 'atasTanahMilik_ig', 'statusTanah_ig', 'luasTanah_ig', 'luasBangunan_ig', 'lokasiTanah_ig', 'batasUtara_ig', 'batasTimur_ig', 'batasSelatan_ig', 'batasBarat_ig', 'tglDitetapkan_ig'], 'required'],
            [['id_akun', 'luasTanah_ig', 'luasBangunan_ig'], 'integer'],
            [['tglPermohonan_ig', 'tglBeritaAcara_ig', 'tglDitetapkan_ig'], 'safe'],
            [['keterangan_ig'], 'string'],
            [['nomor_ig', 'namaPengusaha_ig', 'namaPerusahaan_ig', 'atasTanahMilik_ig', 'statusTanah_ig', 'lokasiTanah_ig', 'batasUtara_ig', 'batasTimur_ig', 'batasSelatan_ig', 'batasBarat_ig'], 'string', 'max' => 50],
            [['alamatPengusaha_ig', 'alamatPerusahaan_ig'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ig' => 'Id Ig',
            'id_akun' => 'Id Akun',
            'nomor_ig' => 'Nomor Ig',
            'namaPengusaha_ig' => 'Nama Pengusaha Ig',
            'alamatPengusaha_ig' => 'Alamat Pengusaha Ig',
            'namaPerusahaan_ig' => 'Nama Perusahaan Ig',
            'alamatPerusahaan_ig' => 'Alamat Perusahaan Ig',
            'tglPermohonan_ig' => 'Tgl Permohonan Ig',
            'tglBeritaAcara_ig' => 'Tgl Berita Acara Ig',
            'atasTanahMilik_ig' => 'Atas Tanah Milik Ig',
            'statusTanah_ig' => 'Status Tanah Ig',
            'luasTanah_ig' => 'Luas Tanah Ig',
            'luasBangunan_ig' => 'Luas Bangunan Ig',
            'lokasiTanah_ig' => 'Lokasi Tanah Ig',
            'batasUtara_ig' => 'Batas Utara Ig',
            'batasTimur_ig' => 'Batas Timur Ig',
            'batasSelatan_ig' => 'Batas Selatan Ig',
            'batasBarat_ig' => 'Batas Barat Ig',
            'tglDitetapkan_ig' => 'Tgl Ditetapkan Ig',
            'keterangan_ig' => 'Keterangan Ig',
        ];
    }
}
