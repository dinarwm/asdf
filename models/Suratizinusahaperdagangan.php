<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "suratizinusahaperdagangan".
 *
 * @property integer $id_siup
 * @property integer $id_akun
 * @property string $nomor_siup
 * @property string $bentukPerusahaan_siup
 * @property string $namaPerusahaan_siup
 * @property string $namaPenanggungJawab_siup
 * @property string $jabatan_siup
 * @property string $alamatPerusahaan_siup
 * @property string $noTelpFax_siup
 * @property string $modalKekayaanBersih_siup
 * @property string $NPWP_siup
 * @property string $kelembagaan_siup
 * @property string $KBLI_siup
 * @property string $barangJasa_siup
 * @property string $tglDikeluarkan_siup
 * @property string $berlaku_siup
 * @property string $keterangan_siup
 */
class Suratizinusahaperdagangan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'suratizinusahaperdagangan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun'], 'integer'],
            [['nomor_siup', 'bentukPerusahaan_siup', 'namaPerusahaan_siup', 'namaPenanggungJawab_siup', 'jabatan_siup', 'alamatPerusahaan_siup', 'noTelpFax_siup', 'modalKekayaanBersih_siup', 'NPWP_siup', 'kelembagaan_siup', 'KBLI_siup', 'barangJasa_siup', 'tglDikeluarkan_siup', 'berlaku_siup'], 'required'],
            [['tglDikeluarkan_siup', 'berlaku_siup'], 'safe'],
            [['keterangan_siup'], 'string'],
            [['nomor_siup', 'bentukPerusahaan_siup', 'namaPerusahaan_siup', 'namaPenanggungJawab_siup', 'jabatan_siup', 'noTelpFax_siup', 'modalKekayaanBersih_siup', 'NPWP_siup', 'kelembagaan_siup', 'KBLI_siup', 'barangJasa_siup'], 'string', 'max' => 50],
            [['alamatPerusahaan_siup'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_siup' => 'Id Siup',
            'id_akun' => 'Id Akun',
            'nomor_siup' => 'Nomor Siup',
            'bentukPerusahaan_siup' => 'Bentuk Perusahaan Siup',
            'namaPerusahaan_siup' => 'Nama Perusahaan Siup',
            'namaPenanggungJawab_siup' => 'Nama Penanggung Jawab Siup',
            'jabatan_siup' => 'Jabatan Siup',
            'alamatPerusahaan_siup' => 'Alamat Perusahaan Siup',
            'noTelpFax_siup' => 'No Telp Fax Siup',
            'modalKekayaanBersih_siup' => 'Modal Kekayaan Bersih Siup',
            'NPWP_siup' => 'Npwp Siup',
            'kelembagaan_siup' => 'Kelembagaan Siup',
            'KBLI_siup' => 'Kbli Siup',
            'barangJasa_siup' => 'Barang Jasa Siup',
            'tglDikeluarkan_siup' => 'Tgl Dikeluarkan Siup',
            'berlaku_siup' => 'Berlaku Siup',
            'keterangan_siup' => 'Keterangan Siup',
        ];
    }
}
