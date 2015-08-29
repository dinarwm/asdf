<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinpenyelenggaraan".
 *
 * @property integer $id_ip
 * @property integer $id_akun
 * @property string $nomor_ip
 * @property string $nama_ip
 * @property string $alamat_ip
 * @property string $tglPermohonan_ip
 * @property string $noPermohonan_ip
 * @property string $namaAcara_ip
 * @property string $tglMulaiAcara_ip
 * @property string $tglAkhirAcara_ip
 * @property integer $jamAcara_ip
 * @property string $tempatAcara_ip
 * @property integer $HTM_ip
 * @property string $tembusan_ip
 * @property string $keterangan_ip
 */
class Izinpenyelenggaraan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinpenyelenggaraan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun', 'jamAcara_ip', 'HTM_ip'], 'integer'],
            [['nomor_ip', 'nama_ip', 'alamat_ip', 'tglPermohonan_ip', 'noPermohonan_ip', 'namaAcara_ip', 'tglMulaiAcara_ip', 'tglAkhirAcara_ip', 'jamAcara_ip', 'tempatAcara_ip', 'HTM_ip', 'tembusan_ip'], 'required'],
            [['tglPermohonan_ip', 'tglMulaiAcara_ip', 'tglAkhirAcara_ip'], 'safe'],
            [['tembusan_ip', 'keterangan_ip'], 'string'],
            [['nomor_ip', 'nama_ip', 'noPermohonan_ip', 'namaAcara_ip', 'tempatAcara_ip'], 'string', 'max' => 50],
            [['alamat_ip'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ip' => 'Id Ip',
            'id_akun' => 'Id Akun',
            'nomor_ip' => 'Nomor Ip',
            'nama_ip' => 'Nama Ip',
            'alamat_ip' => 'Alamat Ip',
            'tglPermohonan_ip' => 'Tgl Permohonan Ip',
            'noPermohonan_ip' => 'No Permohonan Ip',
            'namaAcara_ip' => 'Nama Acara Ip',
            'tglMulaiAcara_ip' => 'Tgl Mulai Acara Ip',
            'tglAkhirAcara_ip' => 'Tgl Akhir Acara Ip',
            'jamAcara_ip' => 'Jam Acara Ip',
            'tempatAcara_ip' => 'Tempat Acara Ip',
            'HTM_ip' => 'Htm Ip',
            'tembusan_ip' => 'Tembusan Ip',
            'keterangan_ip' => 'Keterangan Ip',
        ];
    }
}
