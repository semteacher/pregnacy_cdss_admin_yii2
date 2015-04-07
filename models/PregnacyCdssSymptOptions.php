<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_pregnacycdss_sympt_options".
 *
 * @property string $id
 * @property string $id_symptom
 * @property string $opt_name
 * @property integer $id_order
 * @property integer $is_selected
 *
 * @property PregnacycdssDeceasesSymptOpt[] $pregnacycdssDeceasesSymptOpts
 * @property PregnacyCdssSymptoms $symptom
 */
class PregnacyCdssSymptOptions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_pregnacycdss_sympt_options';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_symptom', 'id_order', 'is_selected'], 'integer'],
            [['opt_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_symptom' => 'Id Symptom',
            'opt_name' => 'Opt Name',
            'id_order' => 'Id Order',
            'is_selected' => 'Is Selected',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPregnacycdssDeceasesSymptOpts()
    {
        return $this->hasMany(PregnacycdssDeceasesSymptOpt::className(), ['id_sympt_opt' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSymptom()
    {
        return $this->hasOne(PregnacyCdssSymptoms::className(), ['id' => 'id_symptom']);
    }
}
