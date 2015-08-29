<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinusahapertambangan".
 *
 * @property integer $id_iup
 * @property integer $id_akun
 * @property string $nomor_iup
 * @property string $namaPemohon_iup
 * @property string $alamatPemohon_iup
 * @property string $tglPermohonan_iup
 * @property string $tglPeninjauan_iup
 * @property string $namaUsaha_iup
 * @property string $komoditas_iup
 * @property string $desaKel_iup
 * @property string $kecamatan_iup
 * @property string $kapasitas_iup
 * @property string $jangkaWaktu_iup
 * @property string $produksi_iup
 * @property string $tglDikeluarkan_iup
 * @property string $keterangan_iup
 */
class Izinusahapertambangan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinusahapertambangan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun'], 'integer'],
            [['nomor_iup', 'namaPemohon_iup', 'alamatPemohon_iup', 'tglPermohonan_iup', 'tglPeninjauan_iup', 'namaUsaha_iup', 'komoditas_iup', 'desaKel_iup', 'kecamatan_iup', 'kapasitas_iup', 'jangkaWaktu_iup', 'produksi_iup', 'tglDikeluarkan_iup'], 'required'],
            [['tglPermohonan_iup', 'tglPeninjauan_iup', 'tglDikeluarkan_iup'], 'safe'],
            [['keterangan_iup'], 'string'],
            [['nomor_iup', 'namaPemohon_iup', 'namaUsaha_iup', 'komoditas_iup', 'desaKel_iup', 'kecamatan_iup', 'kapasitas_iup', 'jangkaWaktu_iup', 'produksi_iup'], 'string', 'max' => 50],
            [['alamatPemohon_iup'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_iup' => 'Id Iup',
            'id_akun' => 'Id Akun',
            'nomor_iup' => 'Nomor Iup',
            'namaPemohon_iup' => 'Nama Pemohon Iup',
            'alamatPemohon_iup' => 'Alamat Pemohon Iup',
            'tglPermohonan_iup' => 'Tgl Permohonan Iup',
            'tglPeninjauan_iup' => 'Tgl Peninjauan Iup',
            'namaUsaha_iup' => 'Nama Usaha Iup',
            'komoditas_iup' => 'Komoditas Iup',
            'desaKel_iup' => 'Desa Kel Iup',
            'kecamatan_iup' => 'Kecamatan Iup',
            'kapasitas_iup' => 'Kapasitas Iup',
            'jangkaWaktu_iup' => 'Jangka Waktu Iup',
            'produksi_iup' => 'Produksi Iup',
            'tglDikeluarkan_iup' => 'Tgl Dikeluarkan Iup',
            'keterangan_iup' => 'Keterangan Iup',
        ];
    }
}
