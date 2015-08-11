<?php

namespace app\controllers;

use Yii;
use app\models\PregnancyCdssPatientExam;
use app\models\PregnancyCdssPatientExamSearch;
use app\models\PregnancyCdssSymptomsSearch;
use app\models\PregnancyCdssSymptOptions;
use app\models\PregnancyCdssSymptoptByPatient;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;

/**
 * PregnancyCdssPatientExamController implements the CRUD actions for PregnancyCdssPatientExam model.
 */
class PregnancyCdssPatientExamController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all PregnancyCdssPatientExam models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PregnancyCdssPatientExamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PregnancyCdssPatientExam model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PregnancyCdssPatientExam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PregnancyCdssPatientExam();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PregnancyCdssPatientExam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PregnancyCdssPatientExam model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PregnancyCdssPatientExam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return PregnancyCdssPatientExam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PregnancyCdssPatientExam::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionDecisiontreeeducationsubmit()
    {
        $searchModel = new PregnancyCdssPatientExamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $submitReport = 'Not implemented';
        
        $formsDataArray = $searchModel->find()->where(['id_finaldecease'=>'1'])->all();
        //$formsDataset = PregnancyCdssDeceaces::find()->asArray()->all();
        
        $symptomsSearchModel = new PregnancyCdssSymptomsSearch();
        $symptomsDataArray = $symptomsSearchModel->find()->where(['is_selected'=>'1'])->all();
        
        $submitArray = array();
        foreach ($formsDataArray as $formsDataObj) 
        {
            //$submitArray[$formsDataObj->id]=['pid'=>$formsDataObj->pid];
            //construct row
            $row = array();
            $client_description = array();
            $client_decease = array();
            $client_data = array();
            
            $client_description = array_merge($client_description, ['url'=>'http://openemr.tdmu.edu.ua', 'form_name' => 'Pregnancy CDSS Form', 'exam_id'=>intval($formsDataObj->id), 'patient_id'=>intval($formsDataObj->pid)]);
            $client_decease = array_merge($client_decease, ['decease_id'=>$formsDataObj->id_finaldecease, 'decease_name'=>$formsDataObj->finaldecease]);
            $row = array_merge($row,['client_description'=>$client_description]);
            $row = array_merge($row,['client_decease'=>$client_decease]);
            
            foreach ($symptomsDataArray as $symptomsDataObj)
            {
                $patientChoice = PregnancyCdssSymptoptByPatient::findOne(['id_exam'=>$formsDataObj->id, 'pid'=>$formsDataObj->pid, 'id_symptom'=>$symptomsDataObj->id]);
                $patientChoiceName = PregnancyCdssSymptOptions::findOne(['id'=>$patientChoice->id_sympt_opt]);
                $client_data = array_merge($client_data,[$symptomsDataObj->id=>['symp_name'=>$symptomsDataObj->symp_name,'opt_id'=>$patientChoice->id_sympt_opt, 'opt_name'=>$patientChoiceName->opt_name]]);
            }
            $row = array_merge($row, ['client_data'=>$client_data]);
            //ad new row to array
            $submitArray[]= $row;
            //$submitArray[]=['exam_id'=>intval($formsDataObj->id), 'patient_id'=>intval($formsDataObj->pid), 'decease'=>$formsDataObj->id_finaldecease];
        }
        //convert to json
        $submitArrayjson = Json::encode($submitArray);
        
        return $this->render('dectreesubmit', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'submitReport' => $submitReport,
            //'formsDataArray' => $formsDataArray,
            //'symptomsDataArray' => $symptomsDataArray,
            'submitArray' => $submitArray,
            'submitArrayjson' => $submitArrayjson,
        ]);
    }
}
