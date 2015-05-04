<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper; // load classes
use app\models\PregnancyCdssDeceaces;
use app\models\PregnancyCdssSymptoms;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PregnancyCdssDeceasesSymptOptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pregnancy CDSS: Deceases by Symptom Option';
$this->params['breadcrumbs'][] = $this->title;

$dataList_decease=ArrayHelper::map(PregnancyCdssDeceaces::find()->asArray()->all(), 'id', 'dec_name');
$dataList_symptom=ArrayHelper::map(PregnancyCdssSymptoms::find()->asArray()->all(), 'id', 'symp_name');
?>
<div class="pregnancy-cdss-deceases-sympt-opt-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pregnancy CDSS Deceases by Symptom Option', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            [
                'attribute' => 'id_deceaces',
                'label'=>'Decease Name',
                'format'=>'text',
                'filter'=>$dataList_decease,
                'value'=>'deceaces.dec_name'
            ],
            [
                'attribute' => 'symptOpt.id_symptom',
                'label'=>'Symptom Name',
                'filter'=>$dataList_symptom,
                'value' => 'symptOpt.symptom.symp_name'
            ],
            [
                'attribute' => 'symptOpt.opt_name'
            ],
            'py',
            'pn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
