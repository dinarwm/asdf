<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinpenggilinganpadi;

/**
 * IzinpenggilinganpadiSearch represents the model behind the search form about `app\models\Izinpenggilinganpadi`.
 */
class IzinpenggilinganpadiSearch extends Izinpenggilinganpadi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ipdhdpb', 'id_akun'], 'integer'],
            [['nomor_ipdhdpb', 'namaPengusaha_ipdhdpb', 'alamatPengusaha_ipdhdpb', 'desaPengusaha_ipdhdpb', 'kecamatanPengusaha_ipdhdpb', 'tglPermohonan_ipdhdpb', 'namaPerusahaan_ipdhdpb', 'alamatPerusahaan_ipdhdpb', 'desaPerusahaan_ipdhdpb', 'kecamatanPerusahaan_ipdhdpb', 'nomorKode_ipdhdpb', 'kapasitasPotensial_ipdhdpb', 'tglLampiran_ipdhdpb', 'noTenagaPenggerak_ipdhdpb', 'jenisTenagaPenggerak_ipdhdpb', 'rpmTenagaPenggerak_ipdhdpb', 'pkTenagaPenggerak_ipdhdpb', 'merkTenagaPenggerak_ipdhdpb', 'jumlahTenagaPenggerak_ipdhdpb', 'noPeralatan_ipdhdpb', 'namaJenisPeralatan_ipdhdpb', 'typePeralatan_ipdhdpb', 'kapasitasPeralatan_ipdhdpb', 'merkPeralatan_ipdhdpb', 'jumlahPeralatan_ipdhdpb', 'keteranganMesinPeralatan_ipdhdpb', 'tglDitetapkan_ipdhdpb', 'keterangan_ipdhdpb'], 'safe'],
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
        $query = Izinpenggilinganpadi::find();

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
            'id_ipdhdpb' => $this->id_ipdhdpb,
            'id_akun' => $this->id_akun,
            'tglPermohonan_ipdhdpb' => $this->tglPermohonan_ipdhdpb,
            'tglLampiran_ipdhdpb' => $this->tglLampiran_ipdhdpb,
            'tglDitetapkan_ipdhdpb' => $this->tglDitetapkan_ipdhdpb,
        ]);

        $query->andFilterWhere(['like', 'nomor_ipdhdpb', $this->nomor_ipdhdpb])
            ->andFilterWhere(['like', 'namaPengusaha_ipdhdpb', $this->namaPengusaha_ipdhdpb])
            ->andFilterWhere(['like', 'alamatPengusaha_ipdhdpb', $this->alamatPengusaha_ipdhdpb])
            ->andFilterWhere(['like', 'desaPengusaha_ipdhdpb', $this->desaPengusaha_ipdhdpb])
            ->andFilterWhere(['like', 'kecamatanPengusaha_ipdhdpb', $this->kecamatanPengusaha_ipdhdpb])
            ->andFilterWhere(['like', 'namaPerusahaan_ipdhdpb', $this->namaPerusahaan_ipdhdpb])
            ->andFilterWhere(['like', 'alamatPerusahaan_ipdhdpb', $this->alamatPerusahaan_ipdhdpb])
            ->andFilterWhere(['like', 'desaPerusahaan_ipdhdpb', $this->desaPerusahaan_ipdhdpb])
            ->andFilterWhere(['like', 'kecamatanPerusahaan_ipdhdpb', $this->kecamatanPerusahaan_ipdhdpb])
            ->andFilterWhere(['like', 'nomorKode_ipdhdpb', $this->nomorKode_ipdhdpb])
            ->andFilterWhere(['like', 'kapasitasPotensial_ipdhdpb', $this->kapasitasPotensial_ipdhdpb])
            ->andFilterWhere(['like', 'noTenagaPenggerak_ipdhdpb', $this->noTenagaPenggerak_ipdhdpb])
            ->andFilterWhere(['like', 'jenisTenagaPenggerak_ipdhdpb', $this->jenisTenagaPenggerak_ipdhdpb])
            ->andFilterWhere(['like', 'rpmTenagaPenggerak_ipdhdpb', $this->rpmTenagaPenggerak_ipdhdpb])
            ->andFilterWhere(['like', 'pkTenagaPenggerak_ipdhdpb', $this->pkTenagaPenggerak_ipdhdpb])
            ->andFilterWhere(['like', 'merkTenagaPenggerak_ipdhdpb', $this->merkTenagaPenggerak_ipdhdpb])
            ->andFilterWhere(['like', 'jumlahTenagaPenggerak_ipdhdpb', $this->jumlahTenagaPenggerak_ipdhdpb])
            ->andFilterWhere(['like', 'noPeralatan_ipdhdpb', $this->noPeralatan_ipdhdpb])
            ->andFilterWhere(['like', 'namaJenisPeralatan_ipdhdpb', $this->namaJenisPeralatan_ipdhdpb])
            ->andFilterWhere(['like', 'typePeralatan_ipdhdpb', $this->typePeralatan_ipdhdpb])
            ->andFilterWhere(['like', 'kapasitasPeralatan_ipdhdpb', $this->kapasitasPeralatan_ipdhdpb])
            ->andFilterWhere(['like', 'merkPeralatan_ipdhdpb', $this->merkPeralatan_ipdhdpb])
            ->andFilterWhere(['like', 'jumlahPeralatan_ipdhdpb', $this->jumlahPeralatan_ipdhdpb])
            ->andFilterWhere(['like', 'keteranganMesinPeralatan_ipdhdpb', $this->keteranganMesinPeralatan_ipdhdpb])
            ->andFilterWhere(['like', 'keterangan_ipdhdpb', $this->keterangan_ipdhdpb]);

        return $dataProvider;
    }
}
