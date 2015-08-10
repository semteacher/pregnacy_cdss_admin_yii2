<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_pregnancycdss_patient_exam".
 *
 * @property string $id
 * @property string $date
 * @property string $pid
 * @property string $user
 * @property string $groupname
 * @property integer $authorized
 * @property integer $activity
 * @property string $encounter
 * @property string $createuser
 * @property string $createdate
 * @property integer $is_firstpregnancy
 * @property string $expect_decease
 * @property string $deceases
 * @property integer $id_finaldecease
 * @property string $finaldecease
 * @property string $finaldecease_icd10
 *
 * @property FormPregnancycdssSymptoptByPatient[] $formPregnancycdssSymptoptByPatients
 */
class PregnancyCdssPatientExam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_pregnancycdss_patient_exam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'createdate'], 'safe'],
            [['pid', 'authorized', 'activity', 'encounter', 'is_firstpregnancy', 'id_finaldecease'], 'integer'],
            [['deceases'], 'string'],
            [['user', 'groupname', 'createuser', 'expect_decease', 'finaldecease', 'finaldecease_icd10'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'pid' => 'Pid',
            'user' => 'User',
            'groupname' => 'Groupname',
            'authorized' => 'Authorized',
            'activity' => 'Activity',
            'encounter' => 'Encounter',
            'createuser' => 'Createuser',
            'createdate' => 'Createdate',
            'is_firstpregnancy' => 'Is Firstpregnancy',
            'expect_decease' => 'Expect Decease',
            'deceases' => 'Deceases',
            'id_finaldecease' => 'Id Finaldecease',
            'finaldecease' => 'Finaldecease',
            'finaldecease_icd10' => 'Finaldecease Icd10',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormPregnancycdssSymptoptByPatients()
    {
        return $this->hasMany(FormPregnancycdssSymptoptByPatient::className(), ['id_exam' => 'id']);
    }
}