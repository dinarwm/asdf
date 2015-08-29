<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Suratizinusahaperdagangan;

/**
 * SuratizinusahaperdaganganSearch represents the model behind the search form about `app\models\Suratizinusahaperdagangan`.
 */
class SuratizinusahaperdaganganSearch extends Suratizinusahaperdagangan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_siup', 'id_akun'], 'integer'],
            [['nomor_siup', 'bentukPerusahaan_siup', 'namaPerusahaan_siup', 'namaPenanggungJawab_siup', 'jabatan_siup', 'alamatPerusahaan_siup', 'noTelpFax_siup', 'modalKekayaanBersih_siup', 'NPWP_siup', 'kelembagaan_siup', 'KBLI_siup', 'barangJasa_siup', 'tglDikeluarkan_siup', 'berlaku_siup', 'keterangan_siup'], 'safe'],
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
        $query = Suratizinusahaperdagangan::find();

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
            'id_siup' => $this->id_siup,
            'id_akun' => $this->id_akun,
            'tglDikeluarkan_siup' => $this->tglDikeluarkan_siup,
            'berlaku_siup' => $this->berlaku_siup,
        ]);

        $query->andFilterWhere(['like', 'nomor_siup', $this->nomor_siup])
            ->andFilterWhere(['like', 'bentukPerusahaan_siup', $this->bentukPerusahaan_siup])
            ->andFilterWhere(['like', 'namaPerusahaan_siup', $this->namaPerusahaan_siup])
            ->andFilterWhere(['like', 'namaPenanggungJawab_siup', $this->namaPenanggungJawab_siup])
            ->andFilterWhere(['like', 'jabatan_siup', $this->jabatan_siup])
            ->andFilterWhere(['like', 'alamatPerusahaan_siup', $this->alamatPerusahaan_siup])
            ->andFilterWhere(['like', 'noTelpFax_siup', $this->noTelpFax_siup])
            ->andFilterWhere(['like', 'modalKekayaanBersih_siup', $this->modalKekayaanBersih_siup])
            ->andFilterWhere(['like', 'NPWP_siup', $this->NPWP_siup])
            ->andFilterWhere(['like', 'kelembagaan_siup', $this->kelembagaan_siup])
            ->andFilterWhere(['like', 'KBLI_siup', $this->KBLI_siup])
            ->andFilterWhere(['like', 'barangJasa_siup', $this->barangJasa_siup])
            ->andFilterWhere(['like', 'keterangan_siup', $this->keterangan_siup]);

        return $dataProvider;
    }
}
