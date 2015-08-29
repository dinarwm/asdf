<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tandadaftarindustri;

/**
 * TandadaftarindustriSearch represents the model behind the search form about `app\models\Tandadaftarindustri`.
 */
class TandadaftarindustriSearch extends Tandadaftarindustri
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tdi', 'id_akun'], 'integer'],
            [['nomor_tdi', 'namaPerusahaan_tdi', 'alamatPerusahaan_tdi', 'nomorTelepon_tdi', 'NPWP_tdi', 'NIPIK_tdi', 'namaPemilik_tdi', 'alamatPemilik_tdi', 'KBLI_tdi', 'KKI_tdi', 'desaKelurahanPabrik_tdi', 'kecamatanPabrik_tdi', 'mesinUtama_tdi', 'mesinPembantu_tdi', 'tenagaPenggerak_tdi', 'nilaiInvestasi_tdi', 'terbilang_tdi', 'kapasitasProduksiTerpasang_tdi', 'tglDitetapkan_tdi', 'keterangan_tdi'], 'safe'],
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
        $query = Tandadaftarindustri::find();

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
            'id_tdi' => $this->id_tdi,
            'id_akun' => $this->id_akun,
            'tglDitetapkan_tdi' => $this->tglDitetapkan_tdi,
        ]);

        $query->andFilterWhere(['like', 'nomor_tdi', $this->nomor_tdi])
            ->andFilterWhere(['like', 'namaPerusahaan_tdi', $this->namaPerusahaan_tdi])
            ->andFilterWhere(['like', 'alamatPerusahaan_tdi', $this->alamatPerusahaan_tdi])
            ->andFilterWhere(['like', 'nomorTelepon_tdi', $this->nomorTelepon_tdi])
            ->andFilterWhere(['like', 'NPWP_tdi', $this->NPWP_tdi])
            ->andFilterWhere(['like', 'NIPIK_tdi', $this->NIPIK_tdi])
            ->andFilterWhere(['like', 'namaPemilik_tdi', $this->namaPemilik_tdi])
            ->andFilterWhere(['like', 'alamatPemilik_tdi', $this->alamatPemilik_tdi])
            ->andFilterWhere(['like', 'KBLI_tdi', $this->KBLI_tdi])
            ->andFilterWhere(['like', 'KKI_tdi', $this->KKI_tdi])
            ->andFilterWhere(['like', 'desaKelurahanPabrik_tdi', $this->desaKelurahanPabrik_tdi])
            ->andFilterWhere(['like', 'kecamatanPabrik_tdi', $this->kecamatanPabrik_tdi])
            ->andFilterWhere(['like', 'mesinUtama_tdi', $this->mesinUtama_tdi])
            ->andFilterWhere(['like', 'mesinPembantu_tdi', $this->mesinPembantu_tdi])
            ->andFilterWhere(['like', 'tenagaPenggerak_tdi', $this->tenagaPenggerak_tdi])
            ->andFilterWhere(['like', 'nilaiInvestasi_tdi', $this->nilaiInvestasi_tdi])
            ->andFilterWhere(['like', 'terbilang_tdi', $this->terbilang_tdi])
            ->andFilterWhere(['like', 'kapasitasProduksiTerpasang_tdi', $this->kapasitasProduksiTerpasang_tdi])
            ->andFilterWhere(['like', 'keterangan_tdi', $this->keterangan_tdi]);

        return $dataProvider;
    }
}
