<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_pregnancycdss_deceaces".
 *
 * @property integer $id
 * @property string $dec_name
 * @property string $dec_note
 * @property double $p
 *
 * @property FormPregnancycdssDeceasesSymptOpt[] $formPregnancycdssDeceasesSymptOpts
 */
class PregnancyCdssDeceaces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_pregnancycdss_deceaces';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['p'], 'number'],
            [['dec_name'], 'string', 'max' => 50],
            [['dec_note'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dec_name' => 'Decease Name',
            'dec_note' => 'Dec Note',
            'p' => 'P',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormPregnancycdssDeceasesSymptOpts()
    {
        return $this->hasMany(FormPregnancycdssDeceasesSymptOpt::className(), ['id_deceaces' => 'id']);
    }
}
