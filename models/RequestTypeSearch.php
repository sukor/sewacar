<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RequestType;

/**
 * RequestTypeSearch represents the model behind the search form about `app\models\RequestType`.
 */
class RequestTypeSearch extends RequestType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id'], 'integer'],
            [['request_name', 'req_type', 'date_in'], 'safe'],
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
        $query = RequestType::find();

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
            'type_id' => $this->type_id,
        ]);

        $query->andFilterWhere(['like', 'request_name', $this->request_name])
            ->andFilterWhere(['like', 'req_type', $this->req_type])
            ->andFilterWhere(['like', 'date_in', $this->date_in]);

        return $dataProvider;
    }
}
