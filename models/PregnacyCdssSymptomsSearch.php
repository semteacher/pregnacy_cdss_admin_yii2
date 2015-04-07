<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PregnacyCdssSymptoms;

/**
 * PregnacyCdssSymptomsSearch represents the model behind the search form about `app\models\PregnacyCdssSymptoms`.
 */
class PregnacyCdssSymptomsSearch extends PregnacyCdssSymptoms
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_order', 'id_category', 'is_multi', 'is_selected'], 'integer'],
            [['symp_name', 'symp_notes'], 'safe'],
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
        $query = PregnacyCdssSymptoms::find();

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
            'id_order' => $this->id_order,
            'id_category' => $this->id_category,
            'is_multi' => $this->is_multi,
            'is_selected' => $this->is_selected,
        ]);

        $query->andFilterWhere(['like', 'symp_name', $this->symp_name])
            ->andFilterWhere(['like', 'symp_notes', $this->symp_notes]);

        return $dataProvider;
    }
}
