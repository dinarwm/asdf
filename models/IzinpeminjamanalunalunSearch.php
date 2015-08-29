<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinpeminjamanalunalun;

/**
 * IzinpeminjamanalunalunSearch represents the model behind the search form about `app\models\Izinpeminjamanalunalun`.
 */
class IzinpeminjamanalunalunSearch extends Izinpeminjamanalunalun
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ipaa', 'id_akun', 'jamAcara_ipaa'], 'integer'],
            [['nomor_ipaa', 'nama_ipaa', 'alamat_ipaa', 'tglPermohonan_ipaa', 'noPermohonan_ipaa', 'perihalPermohonan_ipaa', 'namaAcara_ipaa', 'tglAwalAcara_ipaa', 'tglAkhirAcara_ipaa', 'tglDitetapkan_ipaa', 'keterangan_ipaa'], 'safe'],
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
        $query = Izinpeminjamanalunalun::find();

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
            'id_ipaa' => $this->id_ipaa,
            'id_akun' => $this->id_akun,
            'tglPermohonan_ipaa' => $this->tglPermohonan_ipaa,
            'tglAwalAcara_ipaa' => $this->tglAwalAcara_ipaa,
            'tglAkhirAcara_ipaa' => $this->tglAkhirAcara_ipaa,
            'jamAcara_ipaa' => $this->jamAcara_ipaa,
            'tglDitetapkan_ipaa' => $this->tglDitetapkan_ipaa,
        ]);

        $query->andFilterWhere(['like', 'nomor_ipaa', $this->nomor_ipaa])
            ->andFilterWhere(['like', 'nama_ipaa', $this->nama_ipaa])
            ->andFilterWhere(['like', 'alamat_ipaa', $this->alamat_ipaa])
            ->andFilterWhere(['like', 'noPermohonan_ipaa', $this->noPermohonan_ipaa])
            ->andFilterWhere(['like', 'perihalPermohonan_ipaa', $this->perihalPermohonan_ipaa])
            ->andFilterWhere(['like', 'namaAcara_ipaa', $this->namaAcara_ipaa])
            ->andFilterWhere(['like', 'keterangan_ipaa', $this->keterangan_ipaa]);

        return $dataProvider;
    }
}
