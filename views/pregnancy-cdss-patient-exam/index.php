<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PregnancyCdssPatientExamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pregnancy Cdss Patient Exams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnancy-cdss-patient-exam-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pregnancy Cdss Patient Exam', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'pid',
            'user',
            'groupname',
            // 'authorized',
            // 'activity',
            // 'encounter',
            // 'createuser',
            // 'createdate',
            // 'is_firstpregnancy',
            // 'expect_decease',
            // 'deceases:ntext',
            // 'id_finaldecease',
            // 'finaldecease',
            // 'finaldecease_icd10',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
