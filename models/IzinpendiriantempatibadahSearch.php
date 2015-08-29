<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinpendiriantempatibadah;

/**
 * IzinpendiriantempatibadahSearch represents the model behind the search form about `app\models\Izinpendiriantempatibadah`.
 */
class IzinpendiriantempatibadahSearch extends Izinpendiriantempatibadah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ipti', 'id_akun', 'luasTanah_ipti', 'luasBangunan_ipti'], 'integer'],
            [['nomor_ipti', 'nama_ipti', 'alamat_ipti', 'noPermohonan_ipti', 'perihalPermohonan_ipti', 'tglBeritaAcara_ipti', 'tglRekomendasi_ipti', 'noRekomendasi_ipti', 'alamatBangunan_ipti', 'atasTanahMilik_ipti', 'persilNo_ipti', 'desa_ipti', 'kecamatan_ipti', 'batasUtara_ipti', 'batasTimur_ipti', 'batasSelatan_ipti', 'batasBarat_ipti', 'tglDitetapkan_ipti', 'tembusan_ipti', 'keterangan_ipti'], 'safe'],
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
        $query = Izinpendiriantempatibadah::find();

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
            'id_ipti' => $this->id_ipti,
            'id_akun' => $this->id_akun,
            'tglBeritaAcara_ipti' => $this->tglBeritaAcara_ipti,
            'tglRekomendasi_ipti' => $this->tglRekomendasi_ipti,
            'luasTanah_ipti' => $this->luasTanah_ipti,
            'luasBangunan_ipti' => $this->luasBangunan_ipti,
            'tglDitetapkan_ipti' => $this->tglDitetapkan_ipti,
        ]);

        $query->andFilterWhere(['like', 'nomor_ipti', $this->nomor_ipti])
            ->andFilterWhere(['like', 'nama_ipti', $this->nama_ipti])
            ->andFilterWhere(['like', 'alamat_ipti', $this->alamat_ipti])
            ->andFilterWhere(['like', 'noPermohonan_ipti', $this->noPermohonan_ipti])
            ->andFilterWhere(['like', 'perihalPermohonan_ipti', $this->perihalPermohonan_ipti])
            ->andFilterWhere(['like', 'noRekomendasi_ipti', $this->noRekomendasi_ipti])
            ->andFilterWhere(['like', 'alamatBangunan_ipti', $this->alamatBangunan_ipti])
            ->andFilterWhere(['like', 'atasTanahMilik_ipti', $this->atasTanahMilik_ipti])
            ->andFilterWhere(['like', 'persilNo_ipti', $this->persilNo_ipti])
            ->andFilterWhere(['like', 'desa_ipti', $this->desa_ipti])
            ->andFilterWhere(['like', 'kecamatan_ipti', $this->kecamatan_ipti])
            ->andFilterWhere(['like', 'batasUtara_ipti', $this->batasUtara_ipti])
            ->andFilterWhere(['like', 'batasTimur_ipti', $this->batasTimur_ipti])
            ->andFilterWhere(['like', 'batasSelatan_ipti', $this->batasSelatan_ipti])
            ->andFilterWhere(['like', 'batasBarat_ipti', $this->batasBarat_ipti])
            ->andFilterWhere(['like', 'tembusan_ipti', $this->tembusan_ipti])
            ->andFilterWhere(['like', 'keterangan_ipti', $this->keterangan_ipti]);

        return $dataProvider;
    }
}
