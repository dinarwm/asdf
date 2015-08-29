<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinusahaindustri;

/**
 * IzinusahaindustriSearch represents the model behind the search form about `app\models\Izinusahaindustri`.
 */
class IzinusahaindustriSearch extends Izinusahaindustri
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_iui', 'id_akun', 'totalInvestasi_iui', 'indonesia_iui', 'asing_iui', 'luasGudang_iui'], 'integer'],
            [['nomor_iui', 'tipePerusahaan_iui', 'namaPerusahaan_iui', 'tglPermohonan_iui', 'NPWP_iui', 'KBLI_iui', 'alamatPerusahaan_iui', 'alamatPabrik_iui', 'tglSuratPernyataan_iui', 'nomorLampiran_iui', 'tglLampiran_iui', 'namaPenanggungJawab_iui', 'alamatPenanggungJawab_iui', 'namaPemilikPerusahaan_iui', 'komoditiIndustri_iui', 'kapasitasTerpasang_iui', 'terbilang_iui', 'no_iui', 'komoditi_iui', 'kapasitas_iui', 'satuan_iui', 'tglDitetapkan_iui', 'keterangan_iui'], 'safe'],
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
        $query = Izinusahaindustri::find();

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
            'id_iui' => $this->id_iui,
            'id_akun' => $this->id_akun,
            'tglPermohonan_iui' => $this->tglPermohonan_iui,
            'tglSuratPernyataan_iui' => $this->tglSuratPernyataan_iui,
            'tglLampiran_iui' => $this->tglLampiran_iui,
            'totalInvestasi_iui' => $this->totalInvestasi_iui,
            'indonesia_iui' => $this->indonesia_iui,
            'asing_iui' => $this->asing_iui,
            'luasGudang_iui' => $this->luasGudang_iui,
            'tglDitetapkan_iui' => $this->tglDitetapkan_iui,
        ]);

        $query->andFilterWhere(['like', 'nomor_iui', $this->nomor_iui])
            ->andFilterWhere(['like', 'tipePerusahaan_iui', $this->tipePerusahaan_iui])
            ->andFilterWhere(['like', 'namaPerusahaan_iui', $this->namaPerusahaan_iui])
            ->andFilterWhere(['like', 'NPWP_iui', $this->NPWP_iui])
            ->andFilterWhere(['like', 'KBLI_iui', $this->KBLI_iui])
            ->andFilterWhere(['like', 'alamatPerusahaan_iui', $this->alamatPerusahaan_iui])
            ->andFilterWhere(['like', 'alamatPabrik_iui', $this->alamatPabrik_iui])
            ->andFilterWhere(['like', 'nomorLampiran_iui', $this->nomorLampiran_iui])
            ->andFilterWhere(['like', 'namaPenanggungJawab_iui', $this->namaPenanggungJawab_iui])
            ->andFilterWhere(['like', 'alamatPenanggungJawab_iui', $this->alamatPenanggungJawab_iui])
            ->andFilterWhere(['like', 'namaPemilikPerusahaan_iui', $this->namaPemilikPerusahaan_iui])
            ->andFilterWhere(['like', 'komoditiIndustri_iui', $this->komoditiIndustri_iui])
            ->andFilterWhere(['like', 'kapasitasTerpasang_iui', $this->kapasitasTerpasang_iui])
            ->andFilterWhere(['like', 'terbilang_iui', $this->terbilang_iui])
            ->andFilterWhere(['like', 'no_iui', $this->no_iui])
            ->andFilterWhere(['like', 'komoditi_iui', $this->komoditi_iui])
            ->andFilterWhere(['like', 'kapasitas_iui', $this->kapasitas_iui])
            ->andFilterWhere(['like', 'satuan_iui', $this->satuan_iui])
            ->andFilterWhere(['like', 'keterangan_iui', $this->keterangan_iui]);

        return $dataProvider;
    }
}
