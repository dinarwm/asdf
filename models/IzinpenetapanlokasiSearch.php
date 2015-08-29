<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinpenetapanlokasi;

/**
 * IzinpenetapanlokasiSearch represents the model behind the search form about `app\models\Izinpenetapanlokasi`.
 */
class IzinpenetapanlokasiSearch extends Izinpenetapanlokasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ipl', 'id_akun'], 'integer'],
            [['nomor_ipl', 'namaLokasi_ipl', 'namaPemohon_ipl', 'atasNama_ipl', 'alamat_ipl', 'nomorPermohonan_ipl', 'tglPermohonan_ipl', 'perihalPermohonan_ipl', 'tglPenetapan_ipl', 'nomorPenetapan_ipl', 'tglKoordinasi_ipl', 'desaKel_ipl', 'kecamatan_ipl', 'batasUtara_ipl', 'batasTimur_ipl', 'batasSelatan_ipl', 'batasBarat_ipl', 'tglDikeluarkan_ipl', 'tembusan_ipl', 'keterangan_ipl'], 'safe'],
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
        $query = Izinpenetapanlokasi::find();

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
            'id_ipl' => $this->id_ipl,
            'id_akun' => $this->id_akun,
            'tglPermohonan_ipl' => $this->tglPermohonan_ipl,
            'tglPenetapan_ipl' => $this->tglPenetapan_ipl,
            'tglKoordinasi_ipl' => $this->tglKoordinasi_ipl,
            'tglDikeluarkan_ipl' => $this->tglDikeluarkan_ipl,
        ]);

        $query->andFilterWhere(['like', 'nomor_ipl', $this->nomor_ipl])
            ->andFilterWhere(['like', 'namaLokasi_ipl', $this->namaLokasi_ipl])
            ->andFilterWhere(['like', 'namaPemohon_ipl', $this->namaPemohon_ipl])
            ->andFilterWhere(['like', 'atasNama_ipl', $this->atasNama_ipl])
            ->andFilterWhere(['like', 'alamat_ipl', $this->alamat_ipl])
            ->andFilterWhere(['like', 'nomorPermohonan_ipl', $this->nomorPermohonan_ipl])
            ->andFilterWhere(['like', 'perihalPermohonan_ipl', $this->perihalPermohonan_ipl])
            ->andFilterWhere(['like', 'nomorPenetapan_ipl', $this->nomorPenetapan_ipl])
            ->andFilterWhere(['like', 'desaKel_ipl', $this->desaKel_ipl])
            ->andFilterWhere(['like', 'kecamatan_ipl', $this->kecamatan_ipl])
            ->andFilterWhere(['like', 'batasUtara_ipl', $this->batasUtara_ipl])
            ->andFilterWhere(['like', 'batasTimur_ipl', $this->batasTimur_ipl])
            ->andFilterWhere(['like', 'batasSelatan_ipl', $this->batasSelatan_ipl])
            ->andFilterWhere(['like', 'batasBarat_ipl', $this->batasBarat_ipl])
            ->andFilterWhere(['like', 'tembusan_ipl', $this->tembusan_ipl])
            ->andFilterWhere(['like', 'keterangan_ipl', $this->keterangan_ipl]);

        return $dataProvider;
    }
}
