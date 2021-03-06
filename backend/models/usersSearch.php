<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * usersSearch represents the model behind the search form about `app\models\Users`.
 */
class usersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'phonenumber', 'password'], 'integer'],
            [['fname', 'lname', 'email', 'userid'], 'safe'],
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
        $query = Users::find();

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
            'id' => $this->id,
            'phonenumber' => $this->phonenumber,
            'password' => $this->password,
        ]);

        $query->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'userid', $this->userid]);

        return $dataProvider;
    }
}
