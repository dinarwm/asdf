<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tandadaftargudang".
 *
 * @property integer $id_tdg
 * @property integer $id_akun
 * @property string $nomor_tdg
 * @property string $jenisPerusahaanPerorangan_tdg
 * @property string $namaPerusahaan_tdg
 * @property string $AlamatPerusahaanPerorangan_tdg
 * @property string $namaPemilikPenguasa_tdg
 * @property string $alamatPemilikPenguasa_tdg
 * @property string $nomorSiup_tdg
 * @property string $tglSiup_tdg
 * @property string $tempatSiup_tdg
 * @property string $suratIzinUsahaIndustri_tdg
 * @property string $NPWP_tdg
 * @property string $namaJalan_tdg
 * @property string $desaKelurahan_tdg
 * @property string $kecamatan_tdg
 * @property integer $luasGudang_tdg
 * @property string $tanggalSurat_tdg
 * @property string $keterangan_tdg
 */
class Tandadaftargudang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tandadaftargudang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun', 'luasGudang_tdg'], 'integer'],
            [['nomor_tdg', 'jenisPerusahaanPerorangan_tdg', 'namaPerusahaan_tdg', 'AlamatPerusahaanPerorangan_tdg', 'namaPemilikPenguasa_tdg', 'alamatPemilikPenguasa_tdg', 'nomorSiup_tdg', 'tglSiup_tdg', 'tempatSiup_tdg', 'suratIzinUsahaIndustri_tdg', 'NPWP_tdg', 'namaJalan_tdg', 'desaKelurahan_tdg', 'kecamatan_tdg', 'luasGudang_tdg', 'tanggalSurat_tdg'], 'required'],
            [['tglSiup_tdg', 'tanggalSurat_tdg'], 'safe'],
            [['keterangan_tdg'], 'string'],
            [['nomor_tdg', 'jenisPerusahaanPerorangan_tdg', 'namaPerusahaan_tdg', 'namaPemilikPenguasa_tdg', 'nomorSiup_tdg', 'tempatSiup_tdg', 'suratIzinUsahaIndustri_tdg', 'NPWP_tdg', 'namaJalan_tdg', 'desaKelurahan_tdg', 'kecamatan_tdg'], 'string', 'max' => 50],
            [['AlamatPerusahaanPerorangan_tdg', 'alamatPemilikPenguasa_tdg'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tdg' => 'Id Tdg',
            'id_akun' => 'Id Akun',
            'nomor_tdg' => 'Nomor Tdg',
            'jenisPerusahaanPerorangan_tdg' => 'Jenis Perusahaan Perorangan Tdg',
            'namaPerusahaan_tdg' => 'Nama Perusahaan Tdg',
            'AlamatPerusahaanPerorangan_tdg' => 'Alamat Perusahaan Perorangan Tdg',
            'namaPemilikPenguasa_tdg' => 'Nama Pemilik Penguasa Tdg',
            'alamatPemilikPenguasa_tdg' => 'Alamat Pemilik Penguasa Tdg',
            'nomorSiup_tdg' => 'Nomor Siup Tdg',
            'tglSiup_tdg' => 'Tgl Siup Tdg',
            'tempatSiup_tdg' => 'Tempat Siup Tdg',
            'suratIzinUsahaIndustri_tdg' => 'Surat Izin Usaha Industri Tdg',
            'NPWP_tdg' => 'Npwp Tdg',
            'namaJalan_tdg' => 'Nama Jalan Tdg',
            'desaKelurahan_tdg' => 'Desa Kelurahan Tdg',
            'kecamatan_tdg' => 'Kecamatan Tdg',
            'luasGudang_tdg' => 'Luas Gudang Tdg',
            'tanggalSurat_tdg' => 'Tanggal Surat Tdg',
            'keterangan_tdg' => 'Keterangan Tdg',
        ];
    }
}
