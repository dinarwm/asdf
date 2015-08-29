<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tandadaftarindustri".
 *
 * @property integer $id_tdi
 * @property integer $id_akun
 * @property string $nomor_tdi
 * @property string $namaPerusahaan_tdi
 * @property string $alamatPerusahaan_tdi
 * @property string $nomorTelepon_tdi
 * @property string $NPWP_tdi
 * @property string $NIPIK_tdi
 * @property string $namaPemilik_tdi
 * @property string $alamatPemilik_tdi
 * @property string $KBLI_tdi
 * @property string $KKI_tdi
 * @property string $desaKelurahanPabrik_tdi
 * @property string $kecamatanPabrik_tdi
 * @property string $mesinUtama_tdi
 * @property string $mesinPembantu_tdi
 * @property string $tenagaPenggerak_tdi
 * @property string $nilaiInvestasi_tdi
 * @property string $terbilang_tdi
 * @property string $kapasitasProduksiTerpasang_tdi
 * @property string $tglDitetapkan_tdi
 * @property string $keterangan_tdi
 */
class Tandadaftarindustri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tandadaftarindustri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun'], 'integer'],
            [['nomor_tdi', 'namaPerusahaan_tdi', 'alamatPerusahaan_tdi', 'nomorTelepon_tdi', 'NPWP_tdi', 'NIPIK_tdi', 'namaPemilik_tdi', 'alamatPemilik_tdi', 'KBLI_tdi', 'KKI_tdi', 'desaKelurahanPabrik_tdi', 'kecamatanPabrik_tdi', 'mesinUtama_tdi', 'mesinPembantu_tdi', 'tenagaPenggerak_tdi', 'nilaiInvestasi_tdi', 'terbilang_tdi', 'kapasitasProduksiTerpasang_tdi', 'tglDitetapkan_tdi'], 'required'],
            [['tglDitetapkan_tdi'], 'safe'],
            [['keterangan_tdi'], 'string'],
            [['nomor_tdi', 'namaPerusahaan_tdi', 'nomorTelepon_tdi', 'NPWP_tdi', 'NIPIK_tdi', 'namaPemilik_tdi', 'KBLI_tdi', 'KKI_tdi', 'desaKelurahanPabrik_tdi', 'kecamatanPabrik_tdi', 'kapasitasProduksiTerpasang_tdi'], 'string', 'max' => 50],
            [['alamatPerusahaan_tdi', 'alamatPemilik_tdi', 'mesinUtama_tdi', 'mesinPembantu_tdi', 'tenagaPenggerak_tdi', 'nilaiInvestasi_tdi', 'terbilang_tdi'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tdi' => 'Id Tdi',
            'id_akun' => 'Id Akun',
            'nomor_tdi' => 'Nomor Tdi',
            'namaPerusahaan_tdi' => 'Nama Perusahaan Tdi',
            'alamatPerusahaan_tdi' => 'Alamat Perusahaan Tdi',
            'nomorTelepon_tdi' => 'Nomor Telepon Tdi',
            'NPWP_tdi' => 'Npwp Tdi',
            'NIPIK_tdi' => 'Nipik Tdi',
            'namaPemilik_tdi' => 'Nama Pemilik Tdi',
            'alamatPemilik_tdi' => 'Alamat Pemilik Tdi',
            'KBLI_tdi' => 'Kbli Tdi',
            'KKI_tdi' => 'Kki Tdi',
            'desaKelurahanPabrik_tdi' => 'Desa Kelurahan Pabrik Tdi',
            'kecamatanPabrik_tdi' => 'Kecamatan Pabrik Tdi',
            'mesinUtama_tdi' => 'Mesin Utama Tdi',
            'mesinPembantu_tdi' => 'Mesin Pembantu Tdi',
            'tenagaPenggerak_tdi' => 'Tenaga Penggerak Tdi',
            'nilaiInvestasi_tdi' => 'Nilai Investasi Tdi',
            'terbilang_tdi' => 'Terbilang Tdi',
            'kapasitasProduksiTerpasang_tdi' => 'Kapasitas Produksi Terpasang Tdi',
            'tglDitetapkan_tdi' => 'Tgl Ditetapkan Tdi',
            'keterangan_tdi' => 'Keterangan Tdi',
        ];
    }
}
