<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinpengumpulandana".
 *
 * @property integer $id_ipd
 * @property integer $id_akun
 * @property string $nomorSK_ipd
 * @property string $namaPemohon_ipd
 * @property string $alamat_ipd
 * @property string $tglPermohonan_ipd
 * @property string $perihalPermohonan_ipd
 * @property string $caraPengumpulanDana_ipd
 * @property string $rincian_ipd
 * @property string $tglMulai_ipd
 * @property string $tglSelesai_ipd
 * @property string $tglDitetapkan_ipd
 * @property string $menimbangPoinA_ipd
 * @property string $tembusan_ipd
 * @property string $keterangan_ipd
 */
class Izinpengumpulandana extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinpengumpulandana';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun'], 'integer'],
            [['nomorSK_ipd', 'namaPemohon_ipd', 'alamat_ipd', 'tglPermohonan_ipd', 'perihalPermohonan_ipd', 'caraPengumpulanDana_ipd', 'rincian_ipd', 'tglMulai_ipd', 'tglSelesai_ipd', 'tglDitetapkan_ipd', 'menimbangPoinA_ipd', 'tembusan_ipd'], 'required'],
            [['tglPermohonan_ipd', 'tglMulai_ipd', 'tglSelesai_ipd', 'tglDitetapkan_ipd'], 'safe'],
            [['menimbangPoinA_ipd', 'tembusan_ipd', 'keterangan_ipd'], 'string'],
            [['nomorSK_ipd', 'namaPemohon_ipd', 'perihalPermohonan_ipd', 'rincian_ipd'], 'string', 'max' => 50],
            [['alamat_ipd', 'caraPengumpulanDana_ipd'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ipd' => 'Id Ipd',
            'id_akun' => 'Id Akun',
            'nomorSK_ipd' => 'Nomor Sk Ipd',
            'namaPemohon_ipd' => 'Nama Pemohon Ipd',
            'alamat_ipd' => 'Alamat Ipd',
            'tglPermohonan_ipd' => 'Tgl Permohonan Ipd',
            'perihalPermohonan_ipd' => 'Perihal Permohonan Ipd',
            'caraPengumpulanDana_ipd' => 'Cara Pengumpulan Dana Ipd',
            'rincian_ipd' => 'Rincian Ipd',
            'tglMulai_ipd' => 'Tgl Mulai Ipd',
            'tglSelesai_ipd' => 'Tgl Selesai Ipd',
            'tglDitetapkan_ipd' => 'Tgl Ditetapkan Ipd',
            'menimbangPoinA_ipd' => 'Menimbang Poin A Ipd',
            'tembusan_ipd' => 'Tembusan Ipd',
            'keterangan_ipd' => 'Keterangan Ipd',
        ];
    }
}
