<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PregnacyCdssDeceasesSymptOpt;

/**
 * PregnacyCdssDeceasesSymptOptSearch represents the model behind the search form about `app\models\PregnacyCdssDeceasesSymptOpt`.
 */
class PregnacyCdssDeceasesSymptOptSearch extends PregnacyCdssDeceasesSymptOpt
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_deceaces', 'id_sympt_opt'], 'integer'],
            [['py', 'pn'], 'number'],
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
        $query = PregnacyCdssDeceasesSymptOpt::find();

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
            'id_deceaces' => $this->id_deceaces,
            'id_sympt_opt' => $this->id_sympt_opt,
            'py' => $this->py,
            'pn' => $this->pn,
        ]);

        return $dataProvider;
    }
}
