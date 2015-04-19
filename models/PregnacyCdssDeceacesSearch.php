<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PregnacyCdssDeceaces;

/**
 * PregnacyCdssDeceacesSearch represents the model behind the search form about `app\models\PregnacyCdssDeceaces`.
 */
class PregnacyCdssDeceacesSearch extends PregnacyCdssDeceaces
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['dec_name', 'dec_note'], 'safe'],
            [['p'], 'number'],
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
        $query = PregnacyCdssDeceaces::find();

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
            'p' => $this->p,
        ]);

        $query->andFilterWhere(['like', 'dec_name', $this->dec_name])
            ->andFilterWhere(['like', 'dec_note', $this->dec_note]);

        return $dataProvider;
    }
}
