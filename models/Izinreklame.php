<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izinreklame".
 *
 * @property integer $id_ir
 * @property integer $id_akun
 * @property string $nomorSuratIzin_ir
 * @property string $namaPemohon_ir
 * @property string $tanggalPermohonan_ir
 * @property string $alamat_ir
 * @property string $macamReklame_ir
 * @property string $bunyiReklame_ir
 * @property string $jumlahReklame_ir
 * @property string $ukuranReklame_ir
 * @property string $tempatPemasangan_ir
 * @property string $lamaPemasangan_ir
 * @property string $tglMulaiPemasangan_ir
 * @property string $tglAkhirPemasangan_ir
 * @property string $keterangan_ir
 */
class Izinreklame extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinreklame';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun'], 'integer'],
            [['nomorSuratIzin_ir', 'namaPemohon_ir', 'tanggalPermohonan_ir', 'alamat_ir', 'macamReklame_ir', 'bunyiReklame_ir', 'jumlahReklame_ir', 'ukuranReklame_ir', 'tempatPemasangan_ir', 'lamaPemasangan_ir', 'tglMulaiPemasangan_ir', 'tglAkhirPemasangan_ir'], 'required'],
            [['tanggalPermohonan_ir', 'tglMulaiPemasangan_ir', 'tglAkhirPemasangan_ir'], 'safe'],
            [['bunyiReklame_ir', 'tempatPemasangan_ir', 'keterangan_ir'], 'string'],
            [['nomorSuratIzin_ir', 'namaPemohon_ir', 'macamReklame_ir', 'jumlahReklame_ir', 'ukuranReklame_ir', 'lamaPemasangan_ir'], 'string', 'max' => 50],
            [['alamat_ir'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ir' => 'Id Ir',
            'id_akun' => 'Id Akun',
            'nomorSuratIzin_ir' => 'Nomor Surat Izin Ir',
            'namaPemohon_ir' => 'Nama Pemohon Ir',
            'tanggalPermohonan_ir' => 'Tanggal Permohonan Ir',
            'alamat_ir' => 'Alamat Ir',
            'macamReklame_ir' => 'Macam Reklame Ir',
            'bunyiReklame_ir' => 'Bunyi Reklame Ir',
            'jumlahReklame_ir' => 'Jumlah Reklame Ir',
            'ukuranReklame_ir' => 'Ukuran Reklame Ir',
            'tempatPemasangan_ir' => 'Tempat Pemasangan Ir',
            'lamaPemasangan_ir' => 'Lama Pemasangan Ir',
            'tglMulaiPemasangan_ir' => 'Tgl Mulai Pemasangan Ir',
            'tglAkhirPemasangan_ir' => 'Tgl Akhir Pemasangan Ir',
            'keterangan_ir' => 'Keterangan Ir',
        ];
    }
}
