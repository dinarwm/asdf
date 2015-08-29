<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinpenyelenggaraan;

/**
 * IzinpenyelenggaraanSearch represents the model behind the search form about `app\models\Izinpenyelenggaraan`.
 */
class IzinpenyelenggaraanSearch extends Izinpenyelenggaraan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ip', 'id_akun', 'jamAcara_ip', 'HTM_ip'], 'integer'],
            [['nomor_ip', 'nama_ip', 'alamat_ip', 'tglPermohonan_ip', 'noPermohonan_ip', 'namaAcara_ip', 'tglMulaiAcara_ip', 'tglAkhirAcara_ip', 'tempatAcara_ip', 'tembusan_ip', 'keterangan_ip'], 'safe'],
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
        $query = Izinpenyelenggaraan::find();

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
            'id_ip' => $this->id_ip,
            'id_akun' => $this->id_akun,
            'tglPermohonan_ip' => $this->tglPermohonan_ip,
            'tglMulaiAcara_ip' => $this->tglMulaiAcara_ip,
            'tglAkhirAcara_ip' => $this->tglAkhirAcara_ip,
            'jamAcara_ip' => $this->jamAcara_ip,
            'HTM_ip' => $this->HTM_ip,
        ]);

        $query->andFilterWhere(['like', 'nomor_ip', $this->nomor_ip])
            ->andFilterWhere(['like', 'nama_ip', $this->nama_ip])
            ->andFilterWhere(['like', 'alamat_ip', $this->alamat_ip])
            ->andFilterWhere(['like', 'noPermohonan_ip', $this->noPermohonan_ip])
            ->andFilterWhere(['like', 'namaAcara_ip', $this->namaAcara_ip])
            ->andFilterWhere(['like', 'tempatAcara_ip', $this->tempatAcara_ip])
            ->andFilterWhere(['like', 'tembusan_ip', $this->tembusan_ip])
            ->andFilterWhere(['like', 'keterangan_ip', $this->keterangan_ip]);

        return $dataProvider;
    }
}
