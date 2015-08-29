<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Daerah;

/**
 * DaerahSearch represents the model behind the search form about `app\models\Daerah`.
 */
class DaerahSearch extends Daerah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_daerah'], 'integer'],
            [['nama_daerah'], 'safe'],
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
        $query = Daerah::find();

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
            'id_daerah' => $this->id_daerah,
        ]);

        $query->andFilterWhere(['like', 'nama_daerah', $this->nama_daerah]);

        return $dataProvider;
    }
}
