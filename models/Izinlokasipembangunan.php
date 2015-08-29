<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinlokasipembangunan".
 *
 * @property integer $id_ilp
 * @property string $id_akun
 * @property string $nomor_ilp
 * @property string $namaLokasi_ilp
 * @property string $namaPemohon_ilp
 * @property string $atasNama_ilp
 * @property string $tglPermohonan_ilp
 * @property string $alamat_ilp
 * @property string $desaKel_ilp
 * @property string $kecamatan_ilp
 * @property string $tglBeritaAcara_ilp
 * @property string $nomorBeritaAcara_ilp
 * @property string $alamatPerusahaan_ilp
 * @property string $letakTanah_ilp
 * @property integer $luasTanah_ilp
 * @property string $buktiPemilikanTanah_ilp
 * @property string $batasUtara_ilp
 * @property string $batasTimur_ilp
 * @property string $batasSelatan_ilp
 * @property string $batasBarat_ilp
 * @property string $tglDikeluarkan_ilp
 * @property string $tembusan_ilp
 * @property string $keterangan_ilp
 */
class Izinlokasipembangunan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinlokasipembangunan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun', 'nomor_ilp', 'namaLokasi_ilp', 'namaPemohon_ilp', 'atasNama_ilp', 'tglPermohonan_ilp', 'alamat_ilp', 'desaKel_ilp', 'kecamatan_ilp', 'tglBeritaAcara_ilp', 'nomorBeritaAcara_ilp', 'alamatPerusahaan_ilp', 'letakTanah_ilp', 'luasTanah_ilp', 'buktiPemilikanTanah_ilp', 'batasUtara_ilp', 'batasTimur_ilp', 'batasSelatan_ilp', 'batasBarat_ilp', 'tglDikeluarkan_ilp', 'tembusan_ilp'], 'required'],
            [['id_akun', 'tembusan_ilp', 'keterangan_ilp'], 'string'],
            [['tglPermohonan_ilp', 'tglBeritaAcara_ilp', 'tglDikeluarkan_ilp'], 'safe'],
            [['luasTanah_ilp'], 'integer'],
            [['nomor_ilp', 'namaLokasi_ilp', 'namaPemohon_ilp', 'atasNama_ilp', 'desaKel_ilp', 'kecamatan_ilp', 'nomorBeritaAcara_ilp', 'letakTanah_ilp', 'buktiPemilikanTanah_ilp', 'batasUtara_ilp', 'batasTimur_ilp', 'batasSelatan_ilp', 'batasBarat_ilp'], 'string', 'max' => 50],
            [['alamat_ilp', 'alamatPerusahaan_ilp'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ilp' => 'Id Ilp',
            'id_akun' => 'Id Akun',
            'nomor_ilp' => 'Nomor Ilp',
            'namaLokasi_ilp' => 'Nama Lokasi Ilp',
            'namaPemohon_ilp' => 'Nama Pemohon Ilp',
            'atasNama_ilp' => 'Atas Nama Ilp',
            'tglPermohonan_ilp' => 'Tgl Permohonan Ilp',
            'alamat_ilp' => 'Alamat Ilp',
            'desaKel_ilp' => 'Desa Kel Ilp',
            'kecamatan_ilp' => 'Kecamatan Ilp',
            'tglBeritaAcara_ilp' => 'Tgl Berita Acara Ilp',
            'nomorBeritaAcara_ilp' => 'Nomor Berita Acara Ilp',
            'alamatPerusahaan_ilp' => 'Alamat Perusahaan Ilp',
            'letakTanah_ilp' => 'Letak Tanah Ilp',
            'luasTanah_ilp' => 'Luas Tanah Ilp',
            'buktiPemilikanTanah_ilp' => 'Bukti Pemilikan Tanah Ilp',
            'batasUtara_ilp' => 'Batas Utara Ilp',
            'batasTimur_ilp' => 'Batas Timur Ilp',
            'batasSelatan_ilp' => 'Batas Selatan Ilp',
            'batasBarat_ilp' => 'Batas Barat Ilp',
            'tglDikeluarkan_ilp' => 'Tgl Dikeluarkan Ilp',
            'tembusan_ilp' => 'Tembusan Ilp',
            'keterangan_ilp' => 'Keterangan Ilp',
        ];
    }
}
