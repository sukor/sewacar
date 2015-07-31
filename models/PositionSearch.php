<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Position;

/**
 * PositionSearch represents the model behind the search form about `app\models\Position`.
 */
class PositionSearch extends Position
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['positio_id'], 'integer'],
            [['position_name', 'position_code'], 'safe'],
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
        $query = Position::find();

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
            'positio_id' => $this->positio_id,
        ]);

        $query->andFilterWhere(['like', 'position_name', $this->position_name])
            ->andFilterWhere(['like', 'position_code', $this->position_code]);

        return $dataProvider;
    }
}
