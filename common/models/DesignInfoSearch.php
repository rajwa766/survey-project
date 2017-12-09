<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DesignInfo;

/**
 * DesignInfoSearch represents the model behind the search form of `common\models\DesignInfo`.
 */
class DesignInfoSearch extends DesignInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'hague', 'maxterm', 'max_no', 'subst_exam', 'dashed', 'shading', 'sections'], 'integer'],
            [['country', 'renewals', 'renewals_details', 'grace', 'grace_details', 'what', 'what_details', 'fees', 'misc', 'misc_details', 'description', 'claim', 'req_docs', 'req_docs_details', 'deferment_period', 'reprod', 'reprod_details'], 'safe'],
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
        $query = DesignInfo::find();

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
            'hague' => $this->hague,
            'maxterm' => $this->maxterm,
            'max_no' => $this->max_no,
            'subst_exam' => $this->subst_exam,
            'dashed' => $this->dashed,
            'shading' => $this->shading,
            'sections' => $this->sections,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'renewals', $this->renewals])
            ->andFilterWhere(['like', 'renewals_details', $this->renewals_details])
            ->andFilterWhere(['like', 'grace', $this->grace])
            ->andFilterWhere(['like', 'grace_details', $this->grace_details])
            ->andFilterWhere(['like', 'what', $this->what])
            ->andFilterWhere(['like', 'what_details', $this->what_details])
            ->andFilterWhere(['like', 'fees', $this->fees])
            ->andFilterWhere(['like', 'misc', $this->misc])
            ->andFilterWhere(['like', 'misc_details', $this->misc_details])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'claim', $this->claim])
            ->andFilterWhere(['like', 'req_docs', $this->req_docs])
            ->andFilterWhere(['like', 'req_docs_details', $this->req_docs_details])
            ->andFilterWhere(['like', 'deferment_period', $this->deferment_period])
            ->andFilterWhere(['like', 'reprod', $this->reprod])
            ->andFilterWhere(['like', 'reprod_details', $this->reprod_details]);

        return $dataProvider;
    }
}
