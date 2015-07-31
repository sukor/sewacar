<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RequestDic;

/**
 * RequestDicSearch represents the model behind the search form about `app\models\RequestDic`.
 */
class RequestDicSearch extends RequestDic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['req_id', 'request_status', 'req_type_id', 'assg_to', 'req_by', 'quantity'], 'integer'],
            [['date_log', 'date_done', 'detail_request', 'date_due', 'special_request', 'other'], 'safe'],
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
        $query = RequestDic::find();

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
            'req_id' => $this->req_id,
            'request_status' => $this->request_status,
            'req_type_id' => $this->req_type_id,
            'assg_to' => $this->assg_to,
            'req_by' => $this->req_by,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'date_log', $this->date_log])
            ->andFilterWhere(['like', 'date_done', $this->date_done])
            ->andFilterWhere(['like', 'detail_request', $this->detail_request])
            ->andFilterWhere(['like', 'date_due', $this->date_due])
            ->andFilterWhere(['like', 'special_request', $this->special_request])
            ->andFilterWhere(['like', 'other', $this->other]);

        return $dataProvider;
    }
}
