<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_pregnacycdss_deceaces".
 *
 * @property integer $id
 * @property string $dec_name
 * @property string $dec_note
 * @property double $p
 *
 * @property FormPregnacycdssDeceasesSymptOpt[] $formPregnacycdssDeceasesSymptOpts
 */
class PregnacyCdssDeceaces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_pregnacycdss_deceaces';
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
    public function getFormPregnacycdssDeceasesSymptOpts()
    {
        return $this->hasMany(FormPregnacycdssDeceasesSymptOpt::className(), ['id_deceaces' => 'id']);
    }
}
