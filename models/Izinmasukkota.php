<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinmasukkota".
 *
 * @property integer $id_imkbkab
 * @property integer $id_akun
 * @property integer $nomor_imkbkab
 * @property string $diberikanKepada_imkbkab
 * @property string $nama_imkbkab
 * @property string $alamat_imkbkab
 * @property string $nopol_imkbkab
 * @property string $jenisMerk_imkbkab
 * @property string $nomorRangka_imkbkab
 * @property string $nomorMesin_imkbkab
 * @property string $untuk_imkbkab
 * @property string $syaratSyarat_imkbkab
 * @property string $awalIzinBerlaku_imkbkab
 * @property string $akhirIzinBerlaku_imkbkab
 * @property string $tglPerizinan_imkbkab
 * @property string $keterangan_imkbkab
 */
class Izinmasukkota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinmasukkota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun', 'nomor_imkbkab', 'diberikanKepada_imkbkab', 'nama_imkbkab', 'alamat_imkbkab', 'nopol_imkbkab', 'jenisMerk_imkbkab', 'nomorRangka_imkbkab', 'nomorMesin_imkbkab', 'untuk_imkbkab', 'syaratSyarat_imkbkab', 'awalIzinBerlaku_imkbkab', 'akhirIzinBerlaku_imkbkab', 'tglPerizinan_imkbkab'], 'required'],
            [['id_akun', 'nomor_imkbkab'], 'integer'],
            [['syaratSyarat_imkbkab', 'keterangan_imkbkab'], 'string'],
            [['awalIzinBerlaku_imkbkab', 'akhirIzinBerlaku_imkbkab', 'tglPerizinan_imkbkab'], 'safe'],
            [['diberikanKepada_imkbkab', 'nama_imkbkab'], 'string', 'max' => 50],
            [['alamat_imkbkab', 'nopol_imkbkab', 'jenisMerk_imkbkab', 'nomorRangka_imkbkab', 'nomorMesin_imkbkab', 'untuk_imkbkab'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_imkbkab' => 'Id Imkbkab',
            'id_akun' => 'Id Akun',
            'nomor_imkbkab' => 'Nomor Imkbkab',
            'diberikanKepada_imkbkab' => 'Diberikan Kepada Imkbkab',
            'nama_imkbkab' => 'Nama Imkbkab',
            'alamat_imkbkab' => 'Alamat Imkbkab',
            'nopol_imkbkab' => 'Nopol Imkbkab',
            'jenisMerk_imkbkab' => 'Jenis Merk Imkbkab',
            'nomorRangka_imkbkab' => 'Nomor Rangka Imkbkab',
            'nomorMesin_imkbkab' => 'Nomor Mesin Imkbkab',
            'untuk_imkbkab' => 'Untuk Imkbkab',
            'syaratSyarat_imkbkab' => 'Syarat Syarat Imkbkab',
            'awalIzinBerlaku_imkbkab' => 'Awal Izin Berlaku Imkbkab',
            'akhirIzinBerlaku_imkbkab' => 'Akhir Izin Berlaku Imkbkab',
            'tglPerizinan_imkbkab' => 'Tgl Perizinan Imkbkab',
            'keterangan_imkbkab' => 'Keterangan Imkbkab',
        ];
    }
}
