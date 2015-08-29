<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kop;

/**
 * KopSearch represents the model behind the search form about `app\models\Kop`.
 */
class KopSearch extends Kop
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kop', 'id_daerah'], 'integer'],
            [['alamat', 'telp', 'nama_camat', 'jabatan', 'nip'], 'safe'],
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
        $query = Kop::find();

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
            'id_kop' => $this->id_kop,
            'id_daerah' => $this->id_daerah,
        ]);

        $query->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'telp', $this->telp])
            ->andFilterWhere(['like', 'nama_camat', $this->nama_camat])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
