<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinusahatokomodern;

/**
 * IzinusahatokomodernSearch represents the model behind the search form about `app\models\Izinusahatokomodern`.
 */
class IzinusahatokomodernSearch extends Izinusahatokomodern
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_iutp', 'id_akun'], 'integer'],
            [['nomor_iutp', 'nama_iutp', 'alamat_iutp', 'tglPermohonan_iutp', 'nomorPermohonan_iutp', 'noTelepon_iutp', 'namaPerusahaan_iutp', 'jenisUsaha_iutp', 'lokasiUsaha_iutp', 'tglDitetapkan_iutp', 'keterangan_iutp'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Izinusahatokomodern::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_iutp' => $this->id_iutp,
            'id_akun' => $this->id_akun,
            'tglPermohonan_iutp' => $this->tglPermohonan_iutp,
            'tglDitetapkan_iutp' => $this->tglDitetapkan_iutp,
        ]);

        $query->andFilterWhere(['like', 'nomor_iutp', $this->nomor_iutp])
            ->andFilterWhere(['like', 'nama_iutp', $this->nama_iutp])
            ->andFilterWhere(['like', 'alamat_iutp', $this->alamat_iutp])
            ->andFilterWhere(['like', 'nomorPermohonan_iutp', $this->nomorPermohonan_iutp])
            ->andFilterWhere(['like', 'noTelepon_iutp', $this->noTelepon_iutp])
            ->andFilterWhere(['like', 'namaPerusahaan_iutp', $this->namaPerusahaan_iutp])
            ->andFilterWhere(['like', 'jenisUsaha_iutp', $this->jenisUsaha_iutp])
            ->andFilterWhere(['like', 'lokasiUsaha_iutp', $this->lokasiUsaha_iutp])
            ->andFilterWhere(['like', 'keterangan_iutp', $this->keterangan_iutp]);

        return $dataProvider;
    }
}
