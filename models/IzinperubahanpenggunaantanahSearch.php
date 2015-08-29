<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinperubahanpenggunaantanah;

/**
 * IzinperubahanpenggunaantanahSearch represents the model behind the search form about `app\models\Izinperubahanpenggunaantanah`.
 */
class IzinperubahanpenggunaantanahSearch extends Izinperubahanpenggunaantanah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ippt', 'id_akun', 'luasTanah_ippt'], 'integer'],
            [['nomor_ippt', 'namaPemohon_ippt', 'atasNama_ippt', 'alamat_ippt', 'tglPermohonan_ippt', 'nomorBeritaAcara_ippt', 'tglBeritaAcara_ippt', 'nomorPertimbanganTeknis_ippt', 'tglPertimbanganteknis_ippt', 'letakTanah_ippt', 'peruntukanPenggunaanTanah_ippt', 'batasUtara_ippt', 'batasTimur_ippt', 'batasSelatan_ippt', 'batasBarat_ippt', 'tglDikeluarkan_ippt', 'keterangan_ippt'], 'safe'],
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
        $query = Izinperubahanpenggunaantanah::find();

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
            'id_ippt' => $this->id_ippt,
            'id_akun' => $this->id_akun,
            'tglPermohonan_ippt' => $this->tglPermohonan_ippt,
            'tglBeritaAcara_ippt' => $this->tglBeritaAcara_ippt,
            'tglPertimbanganteknis_ippt' => $this->tglPertimbanganteknis_ippt,
            'luasTanah_ippt' => $this->luasTanah_ippt,
            'tglDikeluarkan_ippt' => $this->tglDikeluarkan_ippt,
        ]);

        $query->andFilterWhere(['like', 'nomor_ippt', $this->nomor_ippt])
            ->andFilterWhere(['like', 'namaPemohon_ippt', $this->namaPemohon_ippt])
            ->andFilterWhere(['like', 'atasNama_ippt', $this->atasNama_ippt])
            ->andFilterWhere(['like', 'alamat_ippt', $this->alamat_ippt])
            ->andFilterWhere(['like', 'nomorBeritaAcara_ippt', $this->nomorBeritaAcara_ippt])
            ->andFilterWhere(['like', 'nomorPertimbanganTeknis_ippt', $this->nomorPertimbanganTeknis_ippt])
            ->andFilterWhere(['like', 'letakTanah_ippt', $this->letakTanah_ippt])
            ->andFilterWhere(['like', 'peruntukanPenggunaanTanah_ippt', $this->peruntukanPenggunaanTanah_ippt])
            ->andFilterWhere(['like', 'batasUtara_ippt', $this->batasUtara_ippt])
            ->andFilterWhere(['like', 'batasTimur_ippt', $this->batasTimur_ippt])
            ->andFilterWhere(['like', 'batasSelatan_ippt', $this->batasSelatan_ippt])
            ->andFilterWhere(['like', 'batasBarat_ippt', $this->batasBarat_ippt])
            ->andFilterWhere(['like', 'keterangan_ippt', $this->keterangan_ippt]);

        return $dataProvider;
    }
}
