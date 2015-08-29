<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinmenutupjalan".
 *
 * @property integer $id_imj
 * @property integer $id_akun
 * @property string $nomor_imj
 * @property string $tglDikeluarkan_imj
 * @property string $tglPengajuan_imj
 * @property string $kepada_imj
 * @property string $alamat_imj
 * @property string $namaAcara_imj
 * @property string $jalanDitutup_imj
 * @property integer $penutupanJalanMaksimal_imj
 * @property string $tglAcara_imj
 * @property integer $JamAcara_imj
 * @property string $tglAcaraSelesai_imj
 * @property integer $jamAcaraSelesai_imj
 * @property string $tembusan_imj
 * @property string $keterangan_imj
 */
class Izinmenutupjalan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinmenutupjalan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun', 'nomor_imj', 'tglDikeluarkan_imj', 'tglPengajuan_imj', 'kepada_imj', 'alamat_imj', 'namaAcara_imj', 'jalanDitutup_imj', 'penutupanJalanMaksimal_imj', 'tglAcara_imj', 'JamAcara_imj', 'tglAcaraSelesai_imj', 'jamAcaraSelesai_imj', 'tembusan_imj'], 'required'],
            [['id_akun', 'penutupanJalanMaksimal_imj', 'JamAcara_imj', 'jamAcaraSelesai_imj'], 'integer'],
            [['tglDikeluarkan_imj', 'tglPengajuan_imj', 'tglAcara_imj', 'tglAcaraSelesai_imj'], 'safe'],
            [['tembusan_imj', 'keterangan_imj'], 'string'],
            [['nomor_imj', 'kepada_imj', 'namaAcara_imj', 'jalanDitutup_imj'], 'string', 'max' => 50],
            [['alamat_imj'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_imj' => 'Id Imj',
            'id_akun' => 'Id Akun',
            'nomor_imj' => 'Nomor Imj',
            'tglDikeluarkan_imj' => 'Tgl Dikeluarkan Imj',
            'tglPengajuan_imj' => 'Tgl Pengajuan Imj',
            'kepada_imj' => 'Kepada Imj',
            'alamat_imj' => 'Alamat Imj',
            'namaAcara_imj' => 'Nama Acara Imj',
            'jalanDitutup_imj' => 'Jalan Ditutup Imj',
            'penutupanJalanMaksimal_imj' => 'Penutupan Jalan Maksimal Imj',
            'tglAcara_imj' => 'Tgl Acara Imj',
            'JamAcara_imj' => 'Jam Acara Imj',
            'tglAcaraSelesai_imj' => 'Tgl Acara Selesai Imj',
            'jamAcaraSelesai_imj' => 'Jam Acara Selesai Imj',
            'tembusan_imj' => 'Tembusan Imj',
            'keterangan_imj' => 'Keterangan Imj',
        ];
    }
}
