<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_pregnancycdss_deceases_sympt_opt".
 *
 * @property string $id
 * @property integer $id_deceaces
 * @property string $id_sympt_opt
 * @property double $py
 * @property double $pn
 *
 * @property PregnancycdssDeceaces $deceaces
 * @property PregnancycdssSymptOptions $symptOpt
 */
class PregnancyCdssDeceasesSymptOpt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_pregnancycdss_deceases_sympt_opt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_deceaces', 'id_sympt_opt'], 'integer'],
            [['py', 'pn'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_deceaces' => 'Id Deceaces',
            'id_sympt_opt' => 'Id Sympt Opt',
            'py' => 'Py',
            'pn' => 'Pn',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeceaces()
    {
        return $this->hasOne(PregnancyCdssDeceaces::className(), ['id' => 'id_deceaces']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSymptOpt()
    {
        return $this->hasOne(PregnancyCdssSymptOptions::className(), ['id' => 'id_sympt_opt']);
    }
}
