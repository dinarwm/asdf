<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinusahaindustri".
 *
 * @property integer $id_iui
 * @property integer $id_akun
 * @property string $nomor_iui
 * @property string $tipePerusahaan_iui
 * @property string $namaPerusahaan_iui
 * @property string $tglPermohonan_iui
 * @property string $NPWP_iui
 * @property string $KBLI_iui
 * @property string $alamatPerusahaan_iui
 * @property string $alamatPabrik_iui
 * @property string $tglSuratPernyataan_iui
 * @property string $nomorLampiran_iui
 * @property string $tglLampiran_iui
 * @property string $namaPenanggungJawab_iui
 * @property string $alamatPenanggungJawab_iui
 * @property string $namaPemilikPerusahaan_iui
 * @property string $komoditiIndustri_iui
 * @property string $kapasitasTerpasang_iui
 * @property integer $totalInvestasi_iui
 * @property string $terbilang_iui
 * @property integer $indonesia_iui
 * @property integer $asing_iui
 * @property integer $luasGudang_iui
 * @property string $no_iui
 * @property string $komoditi_iui
 * @property string $kapasitas_iui
 * @property string $satuan_iui
 * @property string $tglDitetapkan_iui
 * @property string $keterangan_iui
 */
class Izinusahaindustri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinusahaindustri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun', 'totalInvestasi_iui', 'indonesia_iui', 'asing_iui', 'luasGudang_iui'], 'integer'],
            [['nomor_iui', 'tipePerusahaan_iui', 'namaPerusahaan_iui', 'tglPermohonan_iui', 'NPWP_iui', 'KBLI_iui', 'alamatPerusahaan_iui', 'alamatPabrik_iui', 'tglSuratPernyataan_iui', 'nomorLampiran_iui', 'tglLampiran_iui', 'namaPenanggungJawab_iui', 'alamatPenanggungJawab_iui', 'namaPemilikPerusahaan_iui', 'komoditiIndustri_iui', 'kapasitasTerpasang_iui', 'totalInvestasi_iui', 'terbilang_iui', 'indonesia_iui', 'asing_iui', 'luasGudang_iui', 'no_iui', 'komoditi_iui', 'kapasitas_iui', 'satuan_iui', 'tglDitetapkan_iui'], 'required'],
            [['tglPermohonan_iui', 'tglSuratPernyataan_iui', 'tglLampiran_iui', 'tglDitetapkan_iui'], 'safe'],
            [['keterangan_iui'], 'string'],
            [['nomor_iui', 'namaPerusahaan_iui', 'NPWP_iui', 'KBLI_iui', 'nomorLampiran_iui', 'namaPenanggungJawab_iui', 'namaPemilikPerusahaan_iui', 'komoditiIndustri_iui', 'kapasitasTerpasang_iui', 'terbilang_iui'], 'string', 'max' => 50],
            [['tipePerusahaan_iui'], 'string', 'max' => 10],
            [['alamatPerusahaan_iui', 'alamatPabrik_iui', 'alamatPenanggungJawab_iui', 'no_iui', 'komoditi_iui', 'kapasitas_iui', 'satuan_iui'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_iui' => 'Id Iui',
            'id_akun' => 'Id Akun',
            'nomor_iui' => 'Nomor Iui',
            'tipePerusahaan_iui' => 'Tipe Perusahaan Iui',
            'namaPerusahaan_iui' => 'Nama Perusahaan Iui',
            'tglPermohonan_iui' => 'Tgl Permohonan Iui',
            'NPWP_iui' => 'Npwp Iui',
            'KBLI_iui' => 'Kbli Iui',
            'alamatPerusahaan_iui' => 'Alamat Perusahaan Iui',
            'alamatPabrik_iui' => 'Alamat Pabrik Iui',
            'tglSuratPernyataan_iui' => 'Tgl Surat Pernyataan Iui',
            'nomorLampiran_iui' => 'Nomor Lampiran Iui',
            'tglLampiran_iui' => 'Tgl Lampiran Iui',
            'namaPenanggungJawab_iui' => 'Nama Penanggung Jawab Iui',
            'alamatPenanggungJawab_iui' => 'Alamat Penanggung Jawab Iui',
            'namaPemilikPerusahaan_iui' => 'Nama Pemilik Perusahaan Iui',
            'komoditiIndustri_iui' => 'Komoditi Industri Iui',
            'kapasitasTerpasang_iui' => 'Kapasitas Terpasang Iui',
            'totalInvestasi_iui' => 'Total Investasi Iui',
            'terbilang_iui' => 'Terbilang Iui',
            'indonesia_iui' => 'Indonesia Iui',
            'asing_iui' => 'Asing Iui',
            'luasGudang_iui' => 'Luas Gudang Iui',
            'no_iui' => 'No Iui',
            'komoditi_iui' => 'Komoditi Iui',
            'kapasitas_iui' => 'Kapasitas Iui',
            'satuan_iui' => 'Satuan Iui',
            'tglDitetapkan_iui' => 'Tgl Ditetapkan Iui',
            'keterangan_iui' => 'Keterangan Iui',
        ];
    }
}
