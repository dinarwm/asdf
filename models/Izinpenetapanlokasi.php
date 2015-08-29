<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinpenetapanlokasi".
 *
 * @property integer $id_ipl
 * @property integer $id_akun
 * @property string $nomor_ipl
 * @property string $namaLokasi_ipl
 * @property string $namaPemohon_ipl
 * @property string $atasNama_ipl
 * @property string $alamat_ipl
 * @property string $nomorPermohonan_ipl
 * @property string $tglPermohonan_ipl
 * @property string $perihalPermohonan_ipl
 * @property string $tglPenetapan_ipl
 * @property string $nomorPenetapan_ipl
 * @property string $tglKoordinasi_ipl
 * @property string $desaKel_ipl
 * @property string $kecamatan_ipl
 * @property string $batasUtara_ipl
 * @property string $batasTimur_ipl
 * @property string $batasSelatan_ipl
 * @property string $batasBarat_ipl
 * @property string $tglDikeluarkan_ipl
 * @property string $tembusan_ipl
 * @property string $keterangan_ipl
 */
class Izinpenetapanlokasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinpenetapanlokasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun'], 'integer'],
            [['nomor_ipl', 'namaLokasi_ipl', 'namaPemohon_ipl', 'atasNama_ipl', 'alamat_ipl', 'nomorPermohonan_ipl', 'tglPermohonan_ipl', 'perihalPermohonan_ipl', 'tglPenetapan_ipl', 'nomorPenetapan_ipl', 'tglKoordinasi_ipl', 'desaKel_ipl', 'kecamatan_ipl', 'batasUtara_ipl', 'batasTimur_ipl', 'batasSelatan_ipl', 'batasBarat_ipl', 'tglDikeluarkan_ipl', 'tembusan_ipl'], 'required'],
            [['tglPermohonan_ipl', 'tglPenetapan_ipl', 'tglKoordinasi_ipl', 'tglDikeluarkan_ipl'], 'safe'],
            [['tembusan_ipl', 'keterangan_ipl'], 'string'],
            [['nomor_ipl', 'namaLokasi_ipl', 'namaPemohon_ipl', 'atasNama_ipl', 'nomorPermohonan_ipl', 'perihalPermohonan_ipl', 'nomorPenetapan_ipl', 'desaKel_ipl', 'kecamatan_ipl', 'batasUtara_ipl', 'batasTimur_ipl', 'batasSelatan_ipl', 'batasBarat_ipl'], 'string', 'max' => 50],
            [['alamat_ipl'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ipl' => 'Id Ipl',
            'id_akun' => 'Id Akun',
            'nomor_ipl' => 'Nomor Ipl',
            'namaLokasi_ipl' => 'Nama Lokasi Ipl',
            'namaPemohon_ipl' => 'Nama Pemohon Ipl',
            'atasNama_ipl' => 'Atas Nama Ipl',
            'alamat_ipl' => 'Alamat Ipl',
            'nomorPermohonan_ipl' => 'Nomor Permohonan Ipl',
            'tglPermohonan_ipl' => 'Tgl Permohonan Ipl',
            'perihalPermohonan_ipl' => 'Perihal Permohonan Ipl',
            'tglPenetapan_ipl' => 'Tgl Penetapan Ipl',
            'nomorPenetapan_ipl' => 'Nomor Penetapan Ipl',
            'tglKoordinasi_ipl' => 'Tgl Koordinasi Ipl',
            'desaKel_ipl' => 'Desa Kel Ipl',
            'kecamatan_ipl' => 'Kecamatan Ipl',
            'batasUtara_ipl' => 'Batas Utara Ipl',
            'batasTimur_ipl' => 'Batas Timur Ipl',
            'batasSelatan_ipl' => 'Batas Selatan Ipl',
            'batasBarat_ipl' => 'Batas Barat Ipl',
            'tglDikeluarkan_ipl' => 'Tgl Dikeluarkan Ipl',
            'tembusan_ipl' => 'Tembusan Ipl',
            'keterangan_ipl' => 'Keterangan Ipl',
        ];
    }
}
