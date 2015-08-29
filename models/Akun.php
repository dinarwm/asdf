<?php

namespace app\models;
use Yii;

/**
 * This is the model class for table "akun".
 *
 * @property integer $id_akun
 * @property string $nama
 * @property string $username
 * @property string $pass
 * @property integer $id_daerah
 */
class Akun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'akun';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'username', 'pass', 'id_daerah'], 'required'],
            [['id_daerah'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['username'], 'string', 'max' => 20],
            [['pass'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_akun' => 'Id Akun',
            'nama' => 'Nama',
            'username' => 'Username',
            'pass' => 'Pass',
            'id_daerah' => 'Id Daerah',
        ];
    }

}
