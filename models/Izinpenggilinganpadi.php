<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinpenggilinganpadi".
 *
 * @property integer $id_ipdhdpb
 * @property integer $id_akun
 * @property string $nomor_ipdhdpb
 * @property string $namaPengusaha_ipdhdpb
 * @property string $alamatPengusaha_ipdhdpb
 * @property string $desaPengusaha_ipdhdpb
 * @property string $kecamatanPengusaha_ipdhdpb
 * @property string $tglPermohonan_ipdhdpb
 * @property string $namaPerusahaan_ipdhdpb
 * @property string $alamatPerusahaan_ipdhdpb
 * @property string $desaPerusahaan_ipdhdpb
 * @property string $kecamatanPerusahaan_ipdhdpb
 * @property string $nomorKode_ipdhdpb
 * @property string $kapasitasPotensial_ipdhdpb
 * @property string $tglLampiran_ipdhdpb
 * @property string $noTenagaPenggerak_ipdhdpb
 * @property string $jenisTenagaPenggerak_ipdhdpb
 * @property string $rpmTenagaPenggerak_ipdhdpb
 * @property string $pkTenagaPenggerak_ipdhdpb
 * @property string $merkTenagaPenggerak_ipdhdpb
 * @property string $jumlahTenagaPenggerak_ipdhdpb
 * @property string $noPeralatan_ipdhdpb
 * @property string $namaJenisPeralatan_ipdhdpb
 * @property string $typePeralatan_ipdhdpb
 * @property string $kapasitasPeralatan_ipdhdpb
 * @property string $merkPeralatan_ipdhdpb
 * @property string $jumlahPeralatan_ipdhdpb
 * @property string $keteranganMesinPeralatan_ipdhdpb
 * @property string $tglDitetapkan_ipdhdpb
 * @property string $keterangan_ipdhdpb
 */
class Izinpenggilinganpadi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinpenggilinganpadi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun'], 'integer'],
            [['nomor_ipdhdpb', 'namaPengusaha_ipdhdpb', 'alamatPengusaha_ipdhdpb', 'desaPengusaha_ipdhdpb', 'kecamatanPengusaha_ipdhdpb', 'tglPermohonan_ipdhdpb', 'namaPerusahaan_ipdhdpb', 'alamatPerusahaan_ipdhdpb', 'desaPerusahaan_ipdhdpb', 'kecamatanPerusahaan_ipdhdpb', 'nomorKode_ipdhdpb', 'kapasitasPotensial_ipdhdpb', 'tglLampiran_ipdhdpb', 'noTenagaPenggerak_ipdhdpb', 'jenisTenagaPenggerak_ipdhdpb', 'rpmTenagaPenggerak_ipdhdpb', 'pkTenagaPenggerak_ipdhdpb', 'merkTenagaPenggerak_ipdhdpb', 'jumlahTenagaPenggerak_ipdhdpb', 'noPeralatan_ipdhdpb', 'namaJenisPeralatan_ipdhdpb', 'typePeralatan_ipdhdpb', 'kapasitasPeralatan_ipdhdpb', 'merkPeralatan_ipdhdpb', 'jumlahPeralatan_ipdhdpb', 'keteranganMesinPeralatan_ipdhdpb', 'tglDitetapkan_ipdhdpb'], 'required'],
            [['tglPermohonan_ipdhdpb', 'tglLampiran_ipdhdpb', 'tglDitetapkan_ipdhdpb'], 'safe'],
            [['keterangan_ipdhdpb'], 'string'],
            [['nomor_ipdhdpb', 'namaPengusaha_ipdhdpb', 'alamatPengusaha_ipdhdpb', 'desaPengusaha_ipdhdpb', 'kecamatanPengusaha_ipdhdpb', 'namaPerusahaan_ipdhdpb', 'alamatPerusahaan_ipdhdpb', 'desaPerusahaan_ipdhdpb', 'kecamatanPerusahaan_ipdhdpb', 'nomorKode_ipdhdpb', 'kapasitasPotensial_ipdhdpb'], 'string', 'max' => 50],
            [['noTenagaPenggerak_ipdhdpb', 'jenisTenagaPenggerak_ipdhdpb', 'rpmTenagaPenggerak_ipdhdpb', 'pkTenagaPenggerak_ipdhdpb', 'merkTenagaPenggerak_ipdhdpb', 'jumlahTenagaPenggerak_ipdhdpb', 'noPeralatan_ipdhdpb', 'namaJenisPeralatan_ipdhdpb', 'typePeralatan_ipdhdpb', 'kapasitasPeralatan_ipdhdpb', 'merkPeralatan_ipdhdpb', 'jumlahPeralatan_ipdhdpb', 'keteranganMesinPeralatan_ipdhdpb'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ipdhdpb' => 'Id Ipdhdpb',
            'id_akun' => 'Id Akun',
            'nomor_ipdhdpb' => 'Nomor Ipdhdpb',
            'namaPengusaha_ipdhdpb' => 'Nama Pengusaha Ipdhdpb',
            'alamatPengusaha_ipdhdpb' => 'Alamat Pengusaha Ipdhdpb',
            'desaPengusaha_ipdhdpb' => 'Desa Pengusaha Ipdhdpb',
            'kecamatanPengusaha_ipdhdpb' => 'Kecamatan Pengusaha Ipdhdpb',
            'tglPermohonan_ipdhdpb' => 'Tgl Permohonan Ipdhdpb',
            'namaPerusahaan_ipdhdpb' => 'Nama Perusahaan Ipdhdpb',
            'alamatPerusahaan_ipdhdpb' => 'Alamat Perusahaan Ipdhdpb',
            'desaPerusahaan_ipdhdpb' => 'Desa Perusahaan Ipdhdpb',
            'kecamatanPerusahaan_ipdhdpb' => 'Kecamatan Perusahaan Ipdhdpb',
            'nomorKode_ipdhdpb' => 'Nomor Kode Ipdhdpb',
            'kapasitasPotensial_ipdhdpb' => 'Kapasitas Potensial Ipdhdpb',
            'tglLampiran_ipdhdpb' => 'Tgl Lampiran Ipdhdpb',
            'noTenagaPenggerak_ipdhdpb' => 'No Tenaga Penggerak Ipdhdpb',
            'jenisTenagaPenggerak_ipdhdpb' => 'Jenis Tenaga Penggerak Ipdhdpb',
            'rpmTenagaPenggerak_ipdhdpb' => 'Rpm Tenaga Penggerak Ipdhdpb',
            'pkTenagaPenggerak_ipdhdpb' => 'Pk Tenaga Penggerak Ipdhdpb',
            'merkTenagaPenggerak_ipdhdpb' => 'Merk Tenaga Penggerak Ipdhdpb',
            'jumlahTenagaPenggerak_ipdhdpb' => 'Jumlah Tenaga Penggerak Ipdhdpb',
            'noPeralatan_ipdhdpb' => 'No Peralatan Ipdhdpb',
            'namaJenisPeralatan_ipdhdpb' => 'Nama Jenis Peralatan Ipdhdpb',
            'typePeralatan_ipdhdpb' => 'Type Peralatan Ipdhdpb',
            'kapasitasPeralatan_ipdhdpb' => 'Kapasitas Peralatan Ipdhdpb',
            'merkPeralatan_ipdhdpb' => 'Merk Peralatan Ipdhdpb',
            'jumlahPeralatan_ipdhdpb' => 'Jumlah Peralatan Ipdhdpb',
            'keteranganMesinPeralatan_ipdhdpb' => 'Keterangan Mesin Peralatan Ipdhdpb',
            'tglDitetapkan_ipdhdpb' => 'Tgl Ditetapkan Ipdhdpb',
            'keterangan_ipdhdpb' => 'Keterangan Ipdhdpb',
        ];
    }
}
