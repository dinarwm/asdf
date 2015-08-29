<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinmendirikanbangunan".
 *
 * @property integer $id_imb
 * @property integer $id_akun
 * @property string $nomorPermohonanFormulir_imb
 * @property string $namaPemohon_imb
 * @property string $tempatLahir_imb
 * @property string $tglLahir_imb
 * @property string $pekerjaan_imb
 * @property string $alamat_imb
 * @property string $lokasiBangunan_imb
 * @property string $namaBangunan_imb
 * @property string $jenisBangunan_imb
 * @property string $kondisiBangunan_imb
 * @property integer $luasBangunan_imb
 * @property integer $indeksTerintegrasi_imb
 * @property integer $ibgPermanen_imb
 * @property integer $ibgTingkat_imb
 * @property integer $ibgKepemilikan_imb
 * @property integer $hsbg_imb
 * @property integer $indeksPengaliWilayah_imb
 * @property integer $indeksPengaliJalan_imb
 * @property string $fungsiBangunan_imb
 * @property string $statusTanah_imb
 * @property integer $luasTanah_imb
 * @property integer $tinggiBangunan_imb
 * @property string $tanahMilik_imb
 * @property integer $rooiJalan_imb
 * @property string $batasUtara_imb
 * @property string $batasTimur_imb
 * @property string $batasSelatan_imb
 * @property string $batasBarat_imb
 * @property string $tglPermohonanFormulir_imb
 * @property string $keterangan_imb
 */
class Izinmendirikanbangunan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinmendirikanbangunan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun', 'nomorPermohonanFormulir_imb', 'namaPemohon_imb', 'tempatLahir_imb', 'tglLahir_imb', 'pekerjaan_imb', 'alamat_imb', 'lokasiBangunan_imb', 'namaBangunan_imb', 'jenisBangunan_imb', 'kondisiBangunan_imb', 'luasBangunan_imb', 'indeksTerintegrasi_imb', 'ibgPermanen_imb', 'ibgTingkat_imb', 'ibgKepemilikan_imb', 'hsbg_imb', 'indeksPengaliWilayah_imb', 'indeksPengaliJalan_imb', 'fungsiBangunan_imb', 'statusTanah_imb', 'luasTanah_imb', 'tinggiBangunan_imb', 'tanahMilik_imb', 'rooiJalan_imb', 'batasUtara_imb', 'batasTimur_imb', 'batasSelatan_imb', 'batasBarat_imb', 'tglPermohonanFormulir_imb'], 'required'],
            [['id_akun', 'luasBangunan_imb', 'indeksTerintegrasi_imb', 'ibgPermanen_imb', 'ibgTingkat_imb', 'ibgKepemilikan_imb', 'hsbg_imb', 'indeksPengaliWilayah_imb', 'indeksPengaliJalan_imb', 'luasTanah_imb', 'tinggiBangunan_imb', 'rooiJalan_imb'], 'integer'],
            [['tglLahir_imb', 'tglPermohonanFormulir_imb'], 'safe'],
            [['keterangan_imb'], 'string'],
            [['nomorPermohonanFormulir_imb', 'namaPemohon_imb', 'tempatLahir_imb', 'pekerjaan_imb', 'lokasiBangunan_imb', 'namaBangunan_imb', 'jenisBangunan_imb', 'kondisiBangunan_imb', 'statusTanah_imb', 'tanahMilik_imb', 'batasUtara_imb', 'batasTimur_imb', 'batasSelatan_imb', 'batasBarat_imb'], 'string', 'max' => 50],
            [['alamat_imb', 'fungsiBangunan_imb'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_imb' => 'Id Imb',
            'id_akun' => 'Id Akun',
            'nomorPermohonanFormulir_imb' => 'Nomor Permohonan Formulir Imb',
            'namaPemohon_imb' => 'Nama Pemohon Imb',
            'tempatLahir_imb' => 'Tempat Lahir Imb',
            'tglLahir_imb' => 'Tgl Lahir Imb',
            'pekerjaan_imb' => 'Pekerjaan Imb',
            'alamat_imb' => 'Alamat Imb',
            'lokasiBangunan_imb' => 'Lokasi Bangunan Imb',
            'namaBangunan_imb' => 'Nama Bangunan Imb',
            'jenisBangunan_imb' => 'Jenis Bangunan Imb',
            'kondisiBangunan_imb' => 'Kondisi Bangunan Imb',
            'luasBangunan_imb' => 'Luas Bangunan Imb',
            'indeksTerintegrasi_imb' => 'Indeks Terintegrasi Imb',
            'ibgPermanen_imb' => 'Ibg Permanen Imb',
            'ibgTingkat_imb' => 'Ibg Tingkat Imb',
            'ibgKepemilikan_imb' => 'Ibg Kepemilikan Imb',
            'hsbg_imb' => 'Hsbg Imb',
            'indeksPengaliWilayah_imb' => 'Indeks Pengali Wilayah Imb',
            'indeksPengaliJalan_imb' => 'Indeks Pengali Jalan Imb',
            'fungsiBangunan_imb' => 'Fungsi Bangunan Imb',
            'statusTanah_imb' => 'Status Tanah Imb',
            'luasTanah_imb' => 'Luas Tanah Imb',
            'tinggiBangunan_imb' => 'Tinggi Bangunan Imb',
            'tanahMilik_imb' => 'Tanah Milik Imb',
            'rooiJalan_imb' => 'Rooi Jalan Imb',
            'batasUtara_imb' => 'Batas Utara Imb',
            'batasTimur_imb' => 'Batas Timur Imb',
            'batasSelatan_imb' => 'Batas Selatan Imb',
            'batasBarat_imb' => 'Batas Barat Imb',
            'tglPermohonanFormulir_imb' => 'Tgl Permohonan Formulir Imb',
            'keterangan_imb' => 'Keterangan Imb',
        ];
    }
}
