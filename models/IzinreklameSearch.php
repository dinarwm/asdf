<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinreklame;

/**
 * IzinreklameSearch represents the model behind the search form about `app\models\Izinreklame`.
 */
class IzinreklameSearch extends Izinreklame
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ir', 'id_akun'], 'integer'],
            [['nomorSuratIzin_ir', 'namaPemohon_ir', 'tanggalPermohonan_ir', 'alamat_ir', 'macamReklame_ir', 'bunyiReklame_ir', 'jumlahReklame_ir', 'ukuranReklame_ir', 'tempatPemasangan_ir', 'lamaPemasangan_ir', 'tglMulaiPemasangan_ir', 'tglAkhirPemasangan_ir', 'keterangan_ir'], 'safe'],
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
        $query = Izinreklame::find();

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
            'id_ir' => $this->id_ir,
            'id_akun' => $this->id_akun,
            'tanggalPermohonan_ir' => $this->tanggalPermohonan_ir,
            'tglMulaiPemasangan_ir' => $this->tglMulaiPemasangan_ir,
            'tglAkhirPemasangan_ir' => $this->tglAkhirPemasangan_ir,
        ]);

        $query->andFilterWhere(['like', 'nomorSuratIzin_ir', $this->nomorSuratIzin_ir])
            ->andFilterWhere(['like', 'namaPemohon_ir', $this->namaPemohon_ir])
            ->andFilterWhere(['like', 'alamat_ir', $this->alamat_ir])
            ->andFilterWhere(['like', 'macamReklame_ir', $this->macamReklame_ir])
            ->andFilterWhere(['like', 'bunyiReklame_ir', $this->bunyiReklame_ir])
            ->andFilterWhere(['like', 'jumlahReklame_ir', $this->jumlahReklame_ir])
            ->andFilterWhere(['like', 'ukuranReklame_ir', $this->ukuranReklame_ir])
            ->andFilterWhere(['like', 'tempatPemasangan_ir', $this->tempatPemasangan_ir])
            ->andFilterWhere(['like', 'lamaPemasangan_ir', $this->lamaPemasangan_ir])
            ->andFilterWhere(['like', 'keterangan_ir', $this->keterangan_ir]);

        return $dataProvider;
    }
}
