<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinmasukkota;

/**
 * IzinmasukkotaSearch represents the model behind the search form about `app\models\Izinmasukkota`.
 */
class IzinmasukkotaSearch extends Izinmasukkota
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_imkbkab', 'id_akun', 'nomor_imkbkab'], 'integer'],
            [['diberikanKepada_imkbkab', 'nama_imkbkab', 'alamat_imkbkab', 'nopol_imkbkab', 'jenisMerk_imkbkab', 'nomorRangka_imkbkab', 'nomorMesin_imkbkab', 'untuk_imkbkab', 'syaratSyarat_imkbkab', 'awalIzinBerlaku_imkbkab', 'akhirIzinBerlaku_imkbkab', 'tglPerizinan_imkbkab', 'keterangan_imkbkab'], 'safe'],
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
        $query = Izinmasukkota::find();

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
            'id_imkbkab' => $this->id_imkbkab,
            'id_akun' => $this->id_akun,
            'nomor_imkbkab' => $this->nomor_imkbkab,
            'awalIzinBerlaku_imkbkab' => $this->awalIzinBerlaku_imkbkab,
            'akhirIzinBerlaku_imkbkab' => $this->akhirIzinBerlaku_imkbkab,
            'tglPerizinan_imkbkab' => $this->tglPerizinan_imkbkab,
        ]);

        $query->andFilterWhere(['like', 'diberikanKepada_imkbkab', $this->diberikanKepada_imkbkab])
            ->andFilterWhere(['like', 'nama_imkbkab', $this->nama_imkbkab])
            ->andFilterWhere(['like', 'alamat_imkbkab', $this->alamat_imkbkab])
            ->andFilterWhere(['like', 'nopol_imkbkab', $this->nopol_imkbkab])
            ->andFilterWhere(['like', 'jenisMerk_imkbkab', $this->jenisMerk_imkbkab])
            ->andFilterWhere(['like', 'nomorRangka_imkbkab', $this->nomorRangka_imkbkab])
            ->andFilterWhere(['like', 'nomorMesin_imkbkab', $this->nomorMesin_imkbkab])
            ->andFilterWhere(['like', 'untuk_imkbkab', $this->untuk_imkbkab])
            ->andFilterWhere(['like', 'syaratSyarat_imkbkab', $this->syaratSyarat_imkbkab])
            ->andFilterWhere(['like', 'keterangan_imkbkab', $this->keterangan_imkbkab]);

        return $dataProvider;
    }
}
