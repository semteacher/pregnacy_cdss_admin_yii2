<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper; // load classes
use app\models\PregnancyCdssDeceaces;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PregnancyCdssPatientExamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pregnancy Cdss Patient Exams';
$this->params['breadcrumbs'][] = $this->title;

$dataList_decease=ArrayHelper::map(PregnancyCdssDeceaces::find()->asArray()->all(), 'dec_name', 'dec_name');

//var_dump($dataProvider);
//var_dump($formsDataArray);
var_dump($submitArray);
?>
<div class="pregnancy-cdss-patient-exam-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?//= Html::a('Create Pregnancy Cdss Patient Exam', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Submit ALL records with existing final decease to GAE Deceases Tree Service as educational sets', ['decisiontreeeducationsubmit'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::encode($submitReport) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'date',
            //'pid',
            //'attribute' => 'patientData.lname',
            'attribute' => 'patientData.fullName',
            //'groupname',
            // 'authorized',
            // 'activity',
            // 'encounter',
            // 'createuser',
             'createdate',
             //'is_firstpregnancy',
            [
            'attribute' => 'is_firstpregnancy',
            'format' => 'boolean',
            'filter'=>array("0"=>"No","1"=>"Yes"),
            ], 
             //'expect_decease',
            [
                'attribute' => 'expect_decease',
                'format'=>'text',
                'filter'=>$dataList_decease,
                'value'=>'expect_decease'
            ],             
            // 'deceases:ntext',
            // 'id_finaldecease',
            // 'finaldecease',
            [
                'attribute' => 'finaldecease',
                'format'=>'text',
                'filter'=>$dataList_decease,
                'value'=>'finaldecease'
            ],
            // 'finaldecease_icd10',
            'user',
            [
            'attribute' => 'formsData.deleted',
            'format' => 'boolean',
            'filter'=>array("0"=>"No","1"=>"Yes"),
            ],
            
            ['class' => 'yii\grid\ActionColumn',
             'template' => '{view} {dectreechek}',
             'buttons' => [
	                'dectreechek' => function ($url,$model) {
	                    return Html::a(
                        '<span class="glyphicon glyphicon-user"></span>', 
                       $url);
	                },
                   ],
            ],
        ],
    ]); ?>

</div>
