<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PregnacyCdssSymptOptions;

/**
 * PregnacyCdssSymptOptionsSearch represents the model behind the search form about `app\models\PregnacyCdssSymptOptions`.
 */
class PregnacyCdssSymptOptionsSearch extends PregnacyCdssSymptOptions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_symptom', 'id_order', 'is_selected'], 'integer'],
            [['opt_name'], 'safe'],
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
        $query = PregnacyCdssSymptOptions::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_symptom' => $this->id_symptom,
            'id_order' => $this->id_order,
            'is_selected' => $this->is_selected,
        ]);

        $query->andFilterWhere(['like', 'opt_name', $this->opt_name]);

        return $dataProvider;
    }
}
