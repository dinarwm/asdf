<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kop".
 *
 * @property integer $id_kop
 * @property string $alamat
 * @property string $telp
 * @property string $nama_camat
 * @property string $jabatan
 * @property string $nip
 * @property integer $id_daerah
 */
class Kop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alamat', 'telp', 'nama_camat', 'jabatan', 'nip', 'id_daerah'], 'required'],
            [['id_daerah'], 'integer'],
            [['alamat', 'telp'], 'string', 'max' => 255],
            [['nama_camat'], 'string', 'max' => 100],
            [['jabatan', 'nip'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kop' => 'Id Kop',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'nama_camat' => 'Nama Camat',
            'jabatan' => 'Jabatan',
            'nip' => 'Nip',
            'id_daerah' => 'Id Daerah',
        ];
    }
}
