<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinpendiriantempatibadah".
 *
 * @property integer $id_ipti
 * @property integer $id_akun
 * @property string $nomor_ipti
 * @property string $nama_ipti
 * @property string $alamat_ipti
 * @property string $noPermohonan_ipti
 * @property string $perihalPermohonan_ipti
 * @property string $tglBeritaAcara_ipti
 * @property string $tglRekomendasi_ipti
 * @property string $noRekomendasi_ipti
 * @property string $alamatBangunan_ipti
 * @property string $atasTanahMilik_ipti
 * @property string $persilNo_ipti
 * @property integer $luasTanah_ipti
 * @property integer $luasBangunan_ipti
 * @property string $desa_ipti
 * @property string $kecamatan_ipti
 * @property string $batasUtara_ipti
 * @property string $batasTimur_ipti
 * @property string $batasSelatan_ipti
 * @property string $batasBarat_ipti
 * @property string $tglDitetapkan_ipti
 * @property string $tembusan_ipti
 * @property string $keterangan_ipti
 */
class Izinpendiriantempatibadah extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinpendiriantempatibadah';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun', 'luasTanah_ipti', 'luasBangunan_ipti'], 'integer'],
            [['nomor_ipti', 'nama_ipti', 'alamat_ipti', 'noPermohonan_ipti', 'perihalPermohonan_ipti', 'tglBeritaAcara_ipti', 'tglRekomendasi_ipti', 'noRekomendasi_ipti', 'alamatBangunan_ipti', 'atasTanahMilik_ipti', 'persilNo_ipti', 'luasTanah_ipti', 'luasBangunan_ipti', 'desa_ipti', 'kecamatan_ipti', 'batasUtara_ipti', 'batasTimur_ipti', 'batasSelatan_ipti', 'batasBarat_ipti', 'tglDitetapkan_ipti', 'tembusan_ipti'], 'required'],
            [['tglBeritaAcara_ipti', 'tglRekomendasi_ipti', 'tglDitetapkan_ipti'], 'safe'],
            [['tembusan_ipti', 'keterangan_ipti'], 'string'],
            [['nomor_ipti', 'nama_ipti', 'noPermohonan_ipti', 'perihalPermohonan_ipti', 'noRekomendasi_ipti', 'alamatBangunan_ipti', 'atasTanahMilik_ipti', 'persilNo_ipti', 'desa_ipti', 'kecamatan_ipti', 'batasUtara_ipti', 'batasTimur_ipti', 'batasSelatan_ipti', 'batasBarat_ipti'], 'string', 'max' => 50],
            [['alamat_ipti'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ipti' => 'Id Ipti',
            'id_akun' => 'Id Akun',
            'nomor_ipti' => 'Nomor Ipti',
            'nama_ipti' => 'Nama Ipti',
            'alamat_ipti' => 'Alamat Ipti',
            'noPermohonan_ipti' => 'No Permohonan Ipti',
            'perihalPermohonan_ipti' => 'Perihal Permohonan Ipti',
            'tglBeritaAcara_ipti' => 'Tgl Berita Acara Ipti',
            'tglRekomendasi_ipti' => 'Tgl Rekomendasi Ipti',
            'noRekomendasi_ipti' => 'No Rekomendasi Ipti',
            'alamatBangunan_ipti' => 'Alamat Bangunan Ipti',
            'atasTanahMilik_ipti' => 'Atas Tanah Milik Ipti',
            'persilNo_ipti' => 'Persil No Ipti',
            'luasTanah_ipti' => 'Luas Tanah Ipti',
            'luasBangunan_ipti' => 'Luas Bangunan Ipti',
            'desa_ipti' => 'Desa Ipti',
            'kecamatan_ipti' => 'Kecamatan Ipti',
            'batasUtara_ipti' => 'Batas Utara Ipti',
            'batasTimur_ipti' => 'Batas Timur Ipti',
            'batasSelatan_ipti' => 'Batas Selatan Ipti',
            'batasBarat_ipti' => 'Batas Barat Ipti',
            'tglDitetapkan_ipti' => 'Tgl Ditetapkan Ipti',
            'tembusan_ipti' => 'Tembusan Ipti',
            'keterangan_ipti' => 'Keterangan Ipti',
        ];
    }
}
