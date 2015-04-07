<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_pregnacycdss_symptoms".
 *
 * @property string $id
 * @property string $symp_name
 * @property string $symp_notes
 * @property integer $id_order
 * @property integer $id_category
 * @property integer $is_multi
 * @property integer $is_selected
 *
 * @property FormPregnacycdssSymptOptions[] $formPregnacycdssSymptOptions
 * @property FormPregnacycdssSymptCategory $idCategory
 */
class PregnacyCdssSymptoms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_pregnacycdss_symptoms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_order', 'id_category', 'is_multi', 'is_selected'], 'integer'],
            [['symp_name'], 'string', 'max' => 50],
            [['symp_notes'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'symp_name' => 'Symp Name',
            'symp_notes' => 'Symp Notes',
            'id_order' => 'Id Order',
            'id_category' => 'Id Category',
            'is_multi' => 'Is Multi',
            'is_selected' => 'Is Selected',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormPregnacycdssSymptOptions()
    {
        return $this->hasMany(FormPregnacycdssSymptOptions::className(), ['id_symptom' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategory()
    {
        return $this->hasOne(FormPregnacycdssSymptCategory::className(), ['id' => 'id_category']);
    }
}
