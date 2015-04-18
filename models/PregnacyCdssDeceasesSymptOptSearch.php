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
    public function attributes()
    {
        // add related fields to searchable attributes
        return array_merge(parent::attributes(), ['deceaces.dec_name', 'symptOpt.opt_name', 'symptOpt.id_symptom', 'symptOpt.symptom.symp_name']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_deceaces', 'id_sympt_opt'], 'integer'],
            [['py', 'pn'], 'number'],
            [['deceaces.dec_name', 'symptOpt.opt_name', 'symptOpt.id_symptom', 'symptOpt.symptom.symp_name'], 'safe'],
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

        // join with relation `Deceaces` that is a relation to the table `form_pregnacycdss_deceaces`
        // and set the table alias to be `Deceaces` (upd: table name get from model class by method)
    //    $query->joinWith(['deceaces' => function($query) { $query->from(['deceaces' => PregnacyCdssDeceaces::tableName()]); }]);

        // enable sorting for the related column
    //    $dataProvider->sort->attributes['deceaces.dec_name'] = [
    //        'asc' => ['deceaces.dec_name' => SORT_ASC],
    //        'desc' => ['deceaces.dec_name' => SORT_DESC],
    //    ];

        // join with relation `symptOpt` that is a relation to the table `form_pregnacycdss_sympt_opt`
        // and set the table alias to be `Deceaces` (upd: table name get from model class by method)
        $query->joinWith(['symptOpt' => function($query) { $query->from(['symptOpt' => PregnacyCdssSymptOptions::tableName()]); }]);

        // enable sorting for the related column
        $dataProvider->sort->attributes['symptOpt.opt_name'] = [
            'asc' => ['symptOpt.opt_name' => SORT_ASC],
            'desc' => ['symptOpt.opt_name' => SORT_DESC],
        ];

        // enable sorting for the related column
        //$dataProvider->sort->attributes['symptOpt.symptom.symp_name'] = [
        //    'asc' => ['symptOpt.symptom.symp_name' => SORT_ASC],
        //    'desc' => ['symptOpt.symptom.symp_name' => SORT_DESC],
        //];

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

        $query->andFilterWhere(['like', 'deceaces.dec_name', $this->getAttribute('deceaces.dec_name')]);

        $query->andFilterWhere(['like', 'symptOpt.opt_name', $this->getAttribute('symptOpt.opt_name')]);

        return $dataProvider;
    }
}
