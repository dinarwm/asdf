<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinmendirikanbangunan;

/**
 * IzinmendirikanbangunanSearch represents the model behind the search form about `app\models\Izinmendirikanbangunan`.
 */
class IzinmendirikanbangunanSearch extends Izinmendirikanbangunan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_imb', 'id_akun', 'luasBangunan_imb', 'indeksTerintegrasi_imb', 'ibgPermanen_imb', 'ibgTingkat_imb', 'ibgKepemilikan_imb', 'hsbg_imb', 'indeksPengaliWilayah_imb', 'indeksPengaliJalan_imb', 'luasTanah_imb', 'tinggiBangunan_imb', 'rooiJalan_imb'], 'integer'],
            [['nomorPermohonanFormulir_imb', 'namaPemohon_imb', 'tempatLahir_imb', 'tglLahir_imb', 'pekerjaan_imb', 'alamat_imb', 'lokasiBangunan_imb', 'namaBangunan_imb', 'jenisBangunan_imb', 'kondisiBangunan_imb', 'fungsiBangunan_imb', 'statusTanah_imb', 'tanahMilik_imb', 'batasUtara_imb', 'batasTimur_imb', 'batasSelatan_imb', 'batasBarat_imb', 'tglPermohonanFormulir_imb', 'keterangan_imb'], 'safe'],
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
        $query = Izinmendirikanbangunan::find();

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
            'id_imb' => $this->id_imb,
            'id_akun' => $this->id_akun,
            'tglLahir_imb' => $this->tglLahir_imb,
            'luasBangunan_imb' => $this->luasBangunan_imb,
            'indeksTerintegrasi_imb' => $this->indeksTerintegrasi_imb,
            'ibgPermanen_imb' => $this->ibgPermanen_imb,
            'ibgTingkat_imb' => $this->ibgTingkat_imb,
            'ibgKepemilikan_imb' => $this->ibgKepemilikan_imb,
            'hsbg_imb' => $this->hsbg_imb,
            'indeksPengaliWilayah_imb' => $this->indeksPengaliWilayah_imb,
            'indeksPengaliJalan_imb' => $this->indeksPengaliJalan_imb,
            'luasTanah_imb' => $this->luasTanah_imb,
            'tinggiBangunan_imb' => $this->tinggiBangunan_imb,
            'rooiJalan_imb' => $this->rooiJalan_imb,
            'tglPermohonanFormulir_imb' => $this->tglPermohonanFormulir_imb,
        ]);

        $query->andFilterWhere(['like', 'nomorPermohonanFormulir_imb', $this->nomorPermohonanFormulir_imb])
            ->andFilterWhere(['like', 'namaPemohon_imb', $this->namaPemohon_imb])
            ->andFilterWhere(['like', 'tempatLahir_imb', $this->tempatLahir_imb])
            ->andFilterWhere(['like', 'pekerjaan_imb', $this->pekerjaan_imb])
            ->andFilterWhere(['like', 'alamat_imb', $this->alamat_imb])
            ->andFilterWhere(['like', 'lokasiBangunan_imb', $this->lokasiBangunan_imb])
            ->andFilterWhere(['like', 'namaBangunan_imb', $this->namaBangunan_imb])
            ->andFilterWhere(['like', 'jenisBangunan_imb', $this->jenisBangunan_imb])
            ->andFilterWhere(['like', 'kondisiBangunan_imb', $this->kondisiBangunan_imb])
            ->andFilterWhere(['like', 'fungsiBangunan_imb', $this->fungsiBangunan_imb])
            ->andFilterWhere(['like', 'statusTanah_imb', $this->statusTanah_imb])
            ->andFilterWhere(['like', 'tanahMilik_imb', $this->tanahMilik_imb])
            ->andFilterWhere(['like', 'batasUtara_imb', $this->batasUtara_imb])
            ->andFilterWhere(['like', 'batasTimur_imb', $this->batasTimur_imb])
            ->andFilterWhere(['like', 'batasSelatan_imb', $this->batasSelatan_imb])
            ->andFilterWhere(['like', 'batasBarat_imb', $this->batasBarat_imb])
            ->andFilterWhere(['like', 'keterangan_imb', $this->keterangan_imb]);

        return $dataProvider;
    }
}
