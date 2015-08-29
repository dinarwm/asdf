<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinmenutupjalan;

/**
 * IzinmenutupjalanSearch represents the model behind the search form about `app\models\Izinmenutupjalan`.
 */
class IzinmenutupjalanSearch extends Izinmenutupjalan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_imj', 'id_akun', 'penutupanJalanMaksimal_imj', 'JamAcara_imj', 'jamAcaraSelesai_imj'], 'integer'],
            [['nomor_imj', 'tglDikeluarkan_imj', 'tglPengajuan_imj', 'kepada_imj', 'alamat_imj', 'namaAcara_imj', 'jalanDitutup_imj', 'tglAcara_imj', 'tglAcaraSelesai_imj', 'tembusan_imj', 'keterangan_imj'], 'safe'],
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
        $query = Izinmenutupjalan::find();

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
            'id_imj' => $this->id_imj,
            'id_akun' => $this->id_akun,
            'tglDikeluarkan_imj' => $this->tglDikeluarkan_imj,
            'tglPengajuan_imj' => $this->tglPengajuan_imj,
            'penutupanJalanMaksimal_imj' => $this->penutupanJalanMaksimal_imj,
            'tglAcara_imj' => $this->tglAcara_imj,
            'JamAcara_imj' => $this->JamAcara_imj,
            'tglAcaraSelesai_imj' => $this->tglAcaraSelesai_imj,
            'jamAcaraSelesai_imj' => $this->jamAcaraSelesai_imj,
        ]);

        $query->andFilterWhere(['like', 'nomor_imj', $this->nomor_imj])
            ->andFilterWhere(['like', 'kepada_imj', $this->kepada_imj])
            ->andFilterWhere(['like', 'alamat_imj', $this->alamat_imj])
            ->andFilterWhere(['like', 'namaAcara_imj', $this->namaAcara_imj])
            ->andFilterWhere(['like', 'jalanDitutup_imj', $this->jalanDitutup_imj])
            ->andFilterWhere(['like', 'tembusan_imj', $this->tembusan_imj])
            ->andFilterWhere(['like', 'keterangan_imj', $this->keterangan_imj]);

        return $dataProvider;
    }
}
