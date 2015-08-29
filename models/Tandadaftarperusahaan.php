<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tandadaftarperusahaan".
 *
 * @property integer $id_tdp
 * @property integer $id_akun
 * @property string $nomor_tdp
 * @property string $bentukPerusahaan_tdp
 * @property string $namaPerusahaan_tdp
 * @property string $namaPenanggungJawab_tdp
 * @property string $jabatan_tdp
 * @property string $alamatPerusahaan_tdp
 * @property string $noTelpFax_tdp
 * @property string $NPWP_tdp
 * @property string $statusKantor_tdp
 * @property string $statusPendaftaran_tdp
 * @property string $pembarauan_tdp
 * @property string $KBLI_tdp
 * @property string $nomorKBLI_tdp
 * @property string $tglDikeluarkan_tdp
 * @property string $berlaku_tdp
 * @property string $keterangan_tdp
 */
class Tandadaftarperusahaan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tandadaftarperusahaan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun'], 'integer'],
            [['nomor_tdp', 'bentukPerusahaan_tdp', 'namaPerusahaan_tdp', 'namaPenanggungJawab_tdp', 'jabatan_tdp', 'alamatPerusahaan_tdp', 'noTelpFax_tdp', 'NPWP_tdp', 'statusKantor_tdp', 'statusPendaftaran_tdp', 'pembarauan_tdp', 'KBLI_tdp', 'nomorKBLI_tdp', 'tglDikeluarkan_tdp', 'berlaku_tdp'], 'required'],
            [['tglDikeluarkan_tdp', 'berlaku_tdp'], 'safe'],
            [['keterangan_tdp'], 'string'],
            [['nomor_tdp', 'bentukPerusahaan_tdp', 'namaPerusahaan_tdp', 'namaPenanggungJawab_tdp', 'jabatan_tdp', 'noTelpFax_tdp', 'NPWP_tdp', 'statusKantor_tdp', 'statusPendaftaran_tdp', 'pembarauan_tdp', 'KBLI_tdp', 'nomorKBLI_tdp'], 'string', 'max' => 50],
            [['alamatPerusahaan_tdp'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tdp' => 'Id Tdp',
            'id_akun' => 'Id Akun',
            'nomor_tdp' => 'Nomor Tdp',
            'bentukPerusahaan_tdp' => 'Bentuk Perusahaan Tdp',
            'namaPerusahaan_tdp' => 'Nama Perusahaan Tdp',
            'namaPenanggungJawab_tdp' => 'Nama Penanggung Jawab Tdp',
            'jabatan_tdp' => 'Jabatan Tdp',
            'alamatPerusahaan_tdp' => 'Alamat Perusahaan Tdp',
            'noTelpFax_tdp' => 'No Telp Fax Tdp',
            'NPWP_tdp' => 'Npwp Tdp',
            'statusKantor_tdp' => 'Status Kantor Tdp',
            'statusPendaftaran_tdp' => 'Status Pendaftaran Tdp',
            'pembarauan_tdp' => 'Pembarauan Tdp',
            'KBLI_tdp' => 'Kbli Tdp',
            'nomorKBLI_tdp' => 'Nomor Kbli Tdp',
            'tglDikeluarkan_tdp' => 'Tgl Dikeluarkan Tdp',
            'berlaku_tdp' => 'Berlaku Tdp',
            'keterangan_tdp' => 'Keterangan Tdp',
        ];
    }
}
