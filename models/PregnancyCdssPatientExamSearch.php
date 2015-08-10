<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PregnancyCdssPatientExam;

/**
 * PregnancyCdssPatientExamSearch represents the model behind the search form about `app\models\PregnancyCdssPatientExam`.
 */
class PregnancyCdssPatientExamSearch extends PregnancyCdssPatientExam
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pid', 'authorized', 'activity', 'encounter', 'is_firstpregnancy', 'id_finaldecease'], 'integer'],
            [['date', 'user', 'groupname', 'createuser', 'createdate', 'expect_decease', 'deceases', 'finaldecease', 'finaldecease_icd10'], 'safe'],
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
        $query = PregnancyCdssPatientExam::find();

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
            'date' => $this->date,
            'pid' => $this->pid,
            'authorized' => $this->authorized,
            'activity' => $this->activity,
            'encounter' => $this->encounter,
            'createdate' => $this->createdate,
            'is_firstpregnancy' => $this->is_firstpregnancy,
            'id_finaldecease' => $this->id_finaldecease,
        ]);

        $query->andFilterWhere(['like', 'user', $this->user])
            ->andFilterWhere(['like', 'groupname', $this->groupname])
            ->andFilterWhere(['like', 'createuser', $this->createuser])
            ->andFilterWhere(['like', 'expect_decease', $this->expect_decease])
            ->andFilterWhere(['like', 'deceases', $this->deceases])
            ->andFilterWhere(['like', 'finaldecease', $this->finaldecease])
            ->andFilterWhere(['like', 'finaldecease_icd10', $this->finaldecease_icd10]);

        return $dataProvider;
    }
}
