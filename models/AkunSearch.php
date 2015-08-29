<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Akun;

/**
 * AkunSearch represents the model behind the search form about `app\models\Akun`.
 */
class AkunSearch extends Akun
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_akun', 'id_daerah'], 'integer'],
            [['nama', 'username', 'pass'], 'safe'],
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
        $query = Akun::find();

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
            'id_akun' => $this->id_akun,
            'id_daerah' => $this->id_daerah,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'pass', $this->pass]);

        return $dataProvider;
    }
}
