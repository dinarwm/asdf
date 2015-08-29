<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "daerah".
 *
 * @property integer $id_daerah
 * @property string $nama_daerah
 */
class Daerah extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daerah';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_daerah'], 'required'],
            [['nama_daerah'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_daerah' => 'Id Daerah',
            'nama_daerah' => 'Nama Daerah',
        ];
    }
}
