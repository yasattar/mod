<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MovingServiceRequest;

/**
 * MovingServiceRequestSearch represents the model behind the search form about `app\models\MovingServiceRequest`.
 */
class MovingServiceRequestSearch extends MovingServiceRequest
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'request_id', 'msp_id'], 'integer'],
            [['request_type', 'accept', 'reject', 'created_at'], 'safe'],
            [['distance'], 'number'],
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
        $query = MovingServiceRequest::find();

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
            'request_id' => $this->request_id,
            'msp_id' => $this->msp_id,
            'distance' => $this->distance,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'request_type', $this->request_type])
            ->andFilterWhere(['like', 'accept', $this->accept])
            ->andFilterWhere(['like', 'reject', $this->reject]);

        return $dataProvider;
    }
}
