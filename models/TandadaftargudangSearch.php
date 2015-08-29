<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tandadaftargudang;

/**
 * TandadaftargudangSearch represents the model behind the search form about `app\models\Tandadaftargudang`.
 */
class TandadaftargudangSearch extends Tandadaftargudang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tdg', 'id_akun', 'luasGudang_tdg'], 'integer'],
            [['nomor_tdg', 'jenisPerusahaanPerorangan_tdg', 'namaPerusahaan_tdg', 'AlamatPerusahaanPerorangan_tdg', 'namaPemilikPenguasa_tdg', 'alamatPemilikPenguasa_tdg', 'nomorSiup_tdg', 'tglSiup_tdg', 'tempatSiup_tdg', 'suratIzinUsahaIndustri_tdg', 'NPWP_tdg', 'namaJalan_tdg', 'desaKelurahan_tdg', 'kecamatan_tdg', 'tanggalSurat_tdg', 'keterangan_tdg'], 'safe'],
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
        $query = Tandadaftargudang::find();

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
            'id_tdg' => $this->id_tdg,
            'id_akun' => $this->id_akun,
            'tglSiup_tdg' => $this->tglSiup_tdg,
            'luasGudang_tdg' => $this->luasGudang_tdg,
            'tanggalSurat_tdg' => $this->tanggalSurat_tdg,
        ]);

        $query->andFilterWhere(['like', 'nomor_tdg', $this->nomor_tdg])
            ->andFilterWhere(['like', 'jenisPerusahaanPerorangan_tdg', $this->jenisPerusahaanPerorangan_tdg])
            ->andFilterWhere(['like', 'namaPerusahaan_tdg', $this->namaPerusahaan_tdg])
            ->andFilterWhere(['like', 'AlamatPerusahaanPerorangan_tdg', $this->AlamatPerusahaanPerorangan_tdg])
            ->andFilterWhere(['like', 'namaPemilikPenguasa_tdg', $this->namaPemilikPenguasa_tdg])
            ->andFilterWhere(['like', 'alamatPemilikPenguasa_tdg', $this->alamatPemilikPenguasa_tdg])
            ->andFilterWhere(['like', 'nomorSiup_tdg', $this->nomorSiup_tdg])
            ->andFilterWhere(['like', 'tempatSiup_tdg', $this->tempatSiup_tdg])
            ->andFilterWhere(['like', 'suratIzinUsahaIndustri_tdg', $this->suratIzinUsahaIndustri_tdg])
            ->andFilterWhere(['like', 'NPWP_tdg', $this->NPWP_tdg])
            ->andFilterWhere(['like', 'namaJalan_tdg', $this->namaJalan_tdg])
            ->andFilterWhere(['like', 'desaKelurahan_tdg', $this->desaKelurahan_tdg])
            ->andFilterWhere(['like', 'kecamatan_tdg', $this->kecamatan_tdg])
            ->andFilterWhere(['like', 'keterangan_tdg', $this->keterangan_tdg]);

        return $dataProvider;
    }
}
