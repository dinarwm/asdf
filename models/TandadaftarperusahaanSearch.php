<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tandadaftarperusahaan;

/**
 * TandadaftarperusahaanSearch represents the model behind the search form about `app\models\Tandadaftarperusahaan`.
 */
class TandadaftarperusahaanSearch extends Tandadaftarperusahaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tdp', 'id_akun'], 'integer'],
            [['nomor_tdp', 'bentukPerusahaan_tdp', 'namaPerusahaan_tdp', 'namaPenanggungJawab_tdp', 'jabatan_tdp', 'alamatPerusahaan_tdp', 'noTelpFax_tdp', 'NPWP_tdp', 'statusKantor_tdp', 'statusPendaftaran_tdp', 'pembarauan_tdp', 'KBLI_tdp', 'nomorKBLI_tdp', 'tglDikeluarkan_tdp', 'berlaku_tdp', 'keterangan_tdp'], 'safe'],
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
        $query = Tandadaftarperusahaan::find();

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
            'id_tdp' => $this->id_tdp,
            'id_akun' => $this->id_akun,
            'tglDikeluarkan_tdp' => $this->tglDikeluarkan_tdp,
            'berlaku_tdp' => $this->berlaku_tdp,
        ]);

        $query->andFilterWhere(['like', 'nomor_tdp', $this->nomor_tdp])
            ->andFilterWhere(['like', 'bentukPerusahaan_tdp', $this->bentukPerusahaan_tdp])
            ->andFilterWhere(['like', 'namaPerusahaan_tdp', $this->namaPerusahaan_tdp])
            ->andFilterWhere(['like', 'namaPenanggungJawab_tdp', $this->namaPenanggungJawab_tdp])
            ->andFilterWhere(['like', 'jabatan_tdp', $this->jabatan_tdp])
            ->andFilterWhere(['like', 'alamatPerusahaan_tdp', $this->alamatPerusahaan_tdp])
            ->andFilterWhere(['like', 'noTelpFax_tdp', $this->noTelpFax_tdp])
            ->andFilterWhere(['like', 'NPWP_tdp', $this->NPWP_tdp])
            ->andFilterWhere(['like', 'statusKantor_tdp', $this->statusKantor_tdp])
            ->andFilterWhere(['like', 'statusPendaftaran_tdp', $this->statusPendaftaran_tdp])
            ->andFilterWhere(['like', 'pembarauan_tdp', $this->pembarauan_tdp])
            ->andFilterWhere(['like', 'KBLI_tdp', $this->KBLI_tdp])
            ->andFilterWhere(['like', 'nomorKBLI_tdp', $this->nomorKBLI_tdp])
            ->andFilterWhere(['like', 'keterangan_tdp', $this->keterangan_tdp]);

        return $dataProvider;
    }
}
