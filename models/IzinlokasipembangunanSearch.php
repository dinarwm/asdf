<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinlokasipembangunan;

/**
 * IzinlokasipembangunanSearch represents the model behind the search form about `app\models\Izinlokasipembangunan`.
 */
class IzinlokasipembangunanSearch extends Izinlokasipembangunan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ilp', 'luasTanah_ilp'], 'integer'],
            [['id_akun', 'nomor_ilp', 'namaLokasi_ilp', 'namaPemohon_ilp', 'atasNama_ilp', 'tglPermohonan_ilp', 'alamat_ilp', 'desaKel_ilp', 'kecamatan_ilp', 'tglBeritaAcara_ilp', 'nomorBeritaAcara_ilp', 'alamatPerusahaan_ilp', 'letakTanah_ilp', 'buktiPemilikanTanah_ilp', 'batasUtara_ilp', 'batasTimur_ilp', 'batasSelatan_ilp', 'batasBarat_ilp', 'tglDikeluarkan_ilp', 'tembusan_ilp', 'keterangan_ilp'], 'safe'],
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
        $query = Izinlokasipembangunan::find();

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
            'id_ilp' => $this->id_ilp,
            'tglPermohonan_ilp' => $this->tglPermohonan_ilp,
            'tglBeritaAcara_ilp' => $this->tglBeritaAcara_ilp,
            'luasTanah_ilp' => $this->luasTanah_ilp,
            'tglDikeluarkan_ilp' => $this->tglDikeluarkan_ilp,
        ]);

        $query->andFilterWhere(['like', 'id_akun', $this->id_akun])
            ->andFilterWhere(['like', 'nomor_ilp', $this->nomor_ilp])
            ->andFilterWhere(['like', 'namaLokasi_ilp', $this->namaLokasi_ilp])
            ->andFilterWhere(['like', 'namaPemohon_ilp', $this->namaPemohon_ilp])
            ->andFilterWhere(['like', 'atasNama_ilp', $this->atasNama_ilp])
            ->andFilterWhere(['like', 'alamat_ilp', $this->alamat_ilp])
            ->andFilterWhere(['like', 'desaKel_ilp', $this->desaKel_ilp])
            ->andFilterWhere(['like', 'kecamatan_ilp', $this->kecamatan_ilp])
            ->andFilterWhere(['like', 'nomorBeritaAcara_ilp', $this->nomorBeritaAcara_ilp])
            ->andFilterWhere(['like', 'alamatPerusahaan_ilp', $this->alamatPerusahaan_ilp])
            ->andFilterWhere(['like', 'letakTanah_ilp', $this->letakTanah_ilp])
            ->andFilterWhere(['like', 'buktiPemilikanTanah_ilp', $this->buktiPemilikanTanah_ilp])
            ->andFilterWhere(['like', 'batasUtara_ilp', $this->batasUtara_ilp])
            ->andFilterWhere(['like', 'batasTimur_ilp', $this->batasTimur_ilp])
            ->andFilterWhere(['like', 'batasSelatan_ilp', $this->batasSelatan_ilp])
            ->andFilterWhere(['like', 'batasBarat_ilp', $this->batasBarat_ilp])
            ->andFilterWhere(['like', 'tembusan_ilp', $this->tembusan_ilp])
            ->andFilterWhere(['like', 'keterangan_ilp', $this->keterangan_ilp]);

        return $dataProvider;
    }
}
