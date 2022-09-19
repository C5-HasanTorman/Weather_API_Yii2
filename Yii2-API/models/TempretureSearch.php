<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tempreture;

/**
 * TempretureSearch represents the model behind the search form of `app\models\Tempreture`.
 */
class TempretureSearch extends Tempreture
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['temp_id', 'tempreture', 'city_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Tempreture::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'temp_id' => $this->temp_id,
            'tempreture' => $this->tempreture,
            'city_id' => $this->city_id,
        ]);

        return $dataProvider;
    }
}
