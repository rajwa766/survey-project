<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DesignPrices;

/**
 * DesignPricesSearch represents the model behind the search form of `common\models\DesignPrices`.
 */
class DesignPricesSearch extends DesignPrices
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'WIPO', 'OfficialFee2plus'], 'integer'],
            [['Country'], 'safe'],
            [['OfficialFee1', 'OurFeeSimple1', 'OurFeeSimple2plus', 'OurFeeDetailed1', 'OurFeeDetailed2plus', 'AgentFee1', 'AgentFee2plus'], 'number'],
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
        $query = DesignPrices::find();

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
            'id' => $this->id,
            'WIPO' => $this->WIPO,
            'OfficialFee1' => $this->OfficialFee1,
            'OfficialFee2plus' => $this->OfficialFee2plus,
            'OurFeeSimple1' => $this->OurFeeSimple1,
            'OurFeeSimple2plus' => $this->OurFeeSimple2plus,
            'OurFeeDetailed1' => $this->OurFeeDetailed1,
            'OurFeeDetailed2plus' => $this->OurFeeDetailed2plus,
            'AgentFee1' => $this->AgentFee1,
            'AgentFee2plus' => $this->AgentFee2plus,
        ]);

        $query->andFilterWhere(['like', 'Country', $this->Country]);

        return $dataProvider;
    }
}
