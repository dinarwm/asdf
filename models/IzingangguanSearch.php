<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izingangguan;

/**
 * IzingangguanSearch represents the model behind the search form about `app\models\Izingangguan`.
 */
class IzingangguanSearch extends Izingangguan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ig', 'id_akun', 'luasTanah_ig', 'luasBangunan_ig'], 'integer'],
            [['nomor_ig', 'namaPengusaha_ig', 'alamatPengusaha_ig', 'namaPerusahaan_ig', 'alamatPerusahaan_ig', 'tglPermohonan_ig', 'tglBeritaAcara_ig', 'atasTanahMilik_ig', 'statusTanah_ig', 'lokasiTanah_ig', 'batasUtara_ig', 'batasTimur_ig', 'batasSelatan_ig', 'batasBarat_ig', 'tglDitetapkan_ig', 'keterangan_ig'], 'safe'],
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
        $query = Izingangguan::find();

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
            'id_ig' => $this->id_ig,
            'id_akun' => $this->id_akun,
            'tglPermohonan_ig' => $this->tglPermohonan_ig,
            'tglBeritaAcara_ig' => $this->tglBeritaAcara_ig,
            'luasTanah_ig' => $this->luasTanah_ig,
            'luasBangunan_ig' => $this->luasBangunan_ig,
            'tglDitetapkan_ig' => $this->tglDitetapkan_ig,
        ]);

        $query->andFilterWhere(['like', 'nomor_ig', $this->nomor_ig])
            ->andFilterWhere(['like', 'namaPengusaha_ig', $this->namaPengusaha_ig])
            ->andFilterWhere(['like', 'alamatPengusaha_ig', $this->alamatPengusaha_ig])
            ->andFilterWhere(['like', 'namaPerusahaan_ig', $this->namaPerusahaan_ig])
            ->andFilterWhere(['like', 'alamatPerusahaan_ig', $this->alamatPerusahaan_ig])
            ->andFilterWhere(['like', 'atasTanahMilik_ig', $this->atasTanahMilik_ig])
            ->andFilterWhere(['like', 'statusTanah_ig', $this->statusTanah_ig])
            ->andFilterWhere(['like', 'lokasiTanah_ig', $this->lokasiTanah_ig])
            ->andFilterWhere(['like', 'batasUtara_ig', $this->batasUtara_ig])
            ->andFilterWhere(['like', 'batasTimur_ig', $this->batasTimur_ig])
            ->andFilterWhere(['like', 'batasSelatan_ig', $this->batasSelatan_ig])
            ->andFilterWhere(['like', 'batasBarat_ig', $this->batasBarat_ig])
            ->andFilterWhere(['like', 'keterangan_ig', $this->keterangan_ig]);

        return $dataProvider;
    }
}
