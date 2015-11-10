<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['use_id', 'use_document', 'use_role'], 'integer'],
            [['use_login', 'use_password', 'use_name', 'use_address', 'use_city', 'use_mail', 'use_phone', 'use_cell', 'use_pay', 'use_auth', 'use_access'], 'safe'],
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
        $query = User::find();

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
            'use_id' => $this->use_id,
            'use_document' => $this->use_document,
            'use_role' => $this->use_role,
        ]);

        $query->andFilterWhere(['like', 'use_login', $this->use_login])
            ->andFilterWhere(['like', 'use_password', $this->use_password])
            ->andFilterWhere(['like', 'use_name', $this->use_name])
            ->andFilterWhere(['like', 'use_address', $this->use_address])
            ->andFilterWhere(['like', 'use_city', $this->use_city])
            ->andFilterWhere(['like', 'use_mail', $this->use_mail])
            ->andFilterWhere(['like', 'use_phone', $this->use_phone])
            ->andFilterWhere(['like', 'use_cell', $this->use_cell])
            ->andFilterWhere(['like', 'use_pay', $this->use_pay])
            ->andFilterWhere(['like', 'use_auth', $this->use_auth])
            ->andFilterWhere(['like', 'use_access', $this->use_access]);

        return $dataProvider;
    }
}
