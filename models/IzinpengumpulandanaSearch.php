<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinpengumpulandana;

/**
 * IzinpengumpulandanaSearch represents the model behind the search form about `app\models\Izinpengumpulandana`.
 */
class IzinpengumpulandanaSearch extends Izinpengumpulandana
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ipd', 'id_akun'], 'integer'],
            [['nomorSK_ipd', 'namaPemohon_ipd', 'alamat_ipd', 'tglPermohonan_ipd', 'perihalPermohonan_ipd', 'caraPengumpulanDana_ipd', 'rincian_ipd', 'tglMulai_ipd', 'tglSelesai_ipd', 'tglDitetapkan_ipd', 'menimbangPoinA_ipd', 'tembusan_ipd', 'keterangan_ipd'], 'safe'],
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
        $query = Izinpengumpulandana::find();

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
            'id_ipd' => $this->id_ipd,
            'id_akun' => $this->id_akun,
            'tglPermohonan_ipd' => $this->tglPermohonan_ipd,
            'tglMulai_ipd' => $this->tglMulai_ipd,
            'tglSelesai_ipd' => $this->tglSelesai_ipd,
            'tglDitetapkan_ipd' => $this->tglDitetapkan_ipd,
        ]);

        $query->andFilterWhere(['like', 'nomorSK_ipd', $this->nomorSK_ipd])
            ->andFilterWhere(['like', 'namaPemohon_ipd', $this->namaPemohon_ipd])
            ->andFilterWhere(['like', 'alamat_ipd', $this->alamat_ipd])
            ->andFilterWhere(['like', 'perihalPermohonan_ipd', $this->perihalPermohonan_ipd])
            ->andFilterWhere(['like', 'caraPengumpulanDana_ipd', $this->caraPengumpulanDana_ipd])
            ->andFilterWhere(['like', 'rincian_ipd', $this->rincian_ipd])
            ->andFilterWhere(['like', 'menimbangPoinA_ipd', $this->menimbangPoinA_ipd])
            ->andFilterWhere(['like', 'tembusan_ipd', $this->tembusan_ipd])
            ->andFilterWhere(['like', 'keterangan_ipd', $this->keterangan_ipd]);

        return $dataProvider;
    }
}
