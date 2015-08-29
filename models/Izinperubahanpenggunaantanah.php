<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinperubahanpenggunaantanah".
 *
 * @property integer $id_ippt
 * @property integer $id_akun
 * @property string $nomor_ippt
 * @property string $namaPemohon_ippt
 * @property string $atasNama_ippt
 * @property string $alamat_ippt
 * @property string $tglPermohonan_ippt
 * @property string $nomorBeritaAcara_ippt
 * @property string $tglBeritaAcara_ippt
 * @property string $nomorPertimbanganTeknis_ippt
 * @property string $tglPertimbanganteknis_ippt
 * @property string $letakTanah_ippt
 * @property integer $luasTanah_ippt
 * @property string $peruntukanPenggunaanTanah_ippt
 * @property string $batasUtara_ippt
 * @property string $batasTimur_ippt
 * @property string $batasSelatan_ippt
 * @property string $batasBarat_ippt
 * @property string $tglDikeluarkan_ippt
 * @property string $keterangan_ippt
 */
class Izinperubahanpenggunaantanah extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinperubahanpenggunaantanah';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun', 'luasTanah_ippt'], 'integer'],
            [['nomor_ippt', 'namaPemohon_ippt', 'atasNama_ippt', 'alamat_ippt', 'tglPermohonan_ippt', 'nomorBeritaAcara_ippt', 'tglBeritaAcara_ippt', 'nomorPertimbanganTeknis_ippt', 'tglPertimbanganteknis_ippt', 'letakTanah_ippt', 'luasTanah_ippt', 'peruntukanPenggunaanTanah_ippt', 'batasUtara_ippt', 'batasTimur_ippt', 'batasSelatan_ippt', 'batasBarat_ippt', 'tglDikeluarkan_ippt'], 'required'],
            [['tglPermohonan_ippt', 'tglBeritaAcara_ippt', 'tglPertimbanganteknis_ippt', 'tglDikeluarkan_ippt'], 'safe'],
            [['keterangan_ippt'], 'string'],
            [['nomor_ippt', 'namaPemohon_ippt', 'atasNama_ippt', 'nomorBeritaAcara_ippt', 'nomorPertimbanganTeknis_ippt', 'letakTanah_ippt', 'peruntukanPenggunaanTanah_ippt', 'batasUtara_ippt', 'batasTimur_ippt', 'batasSelatan_ippt', 'batasBarat_ippt'], 'string', 'max' => 50],
            [['alamat_ippt'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ippt' => 'Id Ippt',
            'id_akun' => 'Id Akun',
            'nomor_ippt' => 'Nomor Ippt',
            'namaPemohon_ippt' => 'Nama Pemohon Ippt',
            'atasNama_ippt' => 'Atas Nama Ippt',
            'alamat_ippt' => 'Alamat Ippt',
            'tglPermohonan_ippt' => 'Tgl Permohonan Ippt',
            'nomorBeritaAcara_ippt' => 'Nomor Berita Acara Ippt',
            'tglBeritaAcara_ippt' => 'Tgl Berita Acara Ippt',
            'nomorPertimbanganTeknis_ippt' => 'Nomor Pertimbangan Teknis Ippt',
            'tglPertimbanganteknis_ippt' => 'Tgl Pertimbanganteknis Ippt',
            'letakTanah_ippt' => 'Letak Tanah Ippt',
            'luasTanah_ippt' => 'Luas Tanah Ippt',
            'peruntukanPenggunaanTanah_ippt' => 'Peruntukan Penggunaan Tanah Ippt',
            'batasUtara_ippt' => 'Batas Utara Ippt',
            'batasTimur_ippt' => 'Batas Timur Ippt',
            'batasSelatan_ippt' => 'Batas Selatan Ippt',
            'batasBarat_ippt' => 'Batas Barat Ippt',
            'tglDikeluarkan_ippt' => 'Tgl Dikeluarkan Ippt',
            'keterangan_ippt' => 'Keterangan Ippt',
        ];
    }
}
