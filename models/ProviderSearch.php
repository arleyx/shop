<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Provider;

/**
 * ProviderSearch represents the model behind the search form about `app\models\Provider`.
 */
class ProviderSearch extends Provider
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_id'], 'integer'],
            [['sub_name'], 'safe'],
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
        $query = Provider::find();

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
            'sub_id' => $this->sub_id,
        ]);

        $query->andFilterWhere(['like', 'sub_name', $this->sub_name]);

        return $dataProvider;
    }
}
