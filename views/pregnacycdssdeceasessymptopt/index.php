<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper; // load classes
use app\models\PregnacyCdssDeceaces;
//use app\models\PregnacyCdssDeceacesSearch;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PregnacyCdssDeceasesSymptOptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pregnacy Cdss: Deceases by Symptom Option';
$this->params['breadcrumbs'][] = $this->title;

$dataList_decease=ArrayHelper::map(PregnacyCdssDeceaces::find()->asArray()->all(), 'id', 'dec_name');
?>
<div class="pregnacy-cdss-deceases-sympt-opt-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pregnacy Cdss: Deceases by Symptom Option', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'symptOpt.symptom.symp_name'
                //'attribute' => 'symptOpt.id_symptom',
           //     'attribute' => 'id_deceaces',
           //     'label'=>'Decease Name2',
           //     'format'=>'text',
           //     'filter'=>PregnacyCdssDeceacesSearch::get_allDeceases(),
           //     'content'=>function($data){
           //         return $data->getDeceacesName();
           //     }
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
