<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_pregnacycdss_sympt_category".
 *
 * @property integer $id
 * @property string $cat_name
 * @property string $cat_notes
 * @property integer $is_selected
 *
 * @property FormPregnacycdssSymptoms[] $formPregnacycdssSymptoms
 */
class PregnacyCdssSymptCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_pregnacycdss_sympt_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_selected'], 'integer'],
            [['cat_name'], 'string', 'max' => 100],
            [['cat_notes'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_name' => 'Cat Name',
            'cat_notes' => 'Cat Notes',
            'is_selected' => 'Is Selected',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormPregnacycdssSymptoms()
    {
        return $this->hasMany(FormPregnacycdssSymptoms::className(), ['id_category' => 'id']);
    }
}
