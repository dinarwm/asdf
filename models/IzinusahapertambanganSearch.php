<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinusahapertambangan;

/**
 * IzinusahapertambanganSearch represents the model behind the search form about `app\models\Izinusahapertambangan`.
 */
class IzinusahapertambanganSearch extends Izinusahapertambangan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_iup', 'id_akun'], 'integer'],
            [['nomor_iup', 'namaPemohon_iup', 'alamatPemohon_iup', 'tglPermohonan_iup', 'tglPeninjauan_iup', 'namaUsaha_iup', 'komoditas_iup', 'desaKel_iup', 'kecamatan_iup', 'kapasitas_iup', 'jangkaWaktu_iup', 'produksi_iup', 'tglDikeluarkan_iup', 'keterangan_iup'], 'safe'],
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
        $query = Izinusahapertambangan::find();

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
            'id_iup' => $this->id_iup,
            'id_akun' => $this->id_akun,
            'tglPermohonan_iup' => $this->tglPermohonan_iup,
            'tglPeninjauan_iup' => $this->tglPeninjauan_iup,
            'tglDikeluarkan_iup' => $this->tglDikeluarkan_iup,
        ]);

        $query->andFilterWhere(['like', 'nomor_iup', $this->nomor_iup])
            ->andFilterWhere(['like', 'namaPemohon_iup', $this->namaPemohon_iup])
            ->andFilterWhere(['like', 'alamatPemohon_iup', $this->alamatPemohon_iup])
            ->andFilterWhere(['like', 'namaUsaha_iup', $this->namaUsaha_iup])
            ->andFilterWhere(['like', 'komoditas_iup', $this->komoditas_iup])
            ->andFilterWhere(['like', 'desaKel_iup', $this->desaKel_iup])
            ->andFilterWhere(['like', 'kecamatan_iup', $this->kecamatan_iup])
            ->andFilterWhere(['like', 'kapasitas_iup', $this->kapasitas_iup])
            ->andFilterWhere(['like', 'jangkaWaktu_iup', $this->jangkaWaktu_iup])
            ->andFilterWhere(['like', 'produksi_iup', $this->produksi_iup])
            ->andFilterWhere(['like', 'keterangan_iup', $this->keterangan_iup]);

        return $dataProvider;
    }
}
