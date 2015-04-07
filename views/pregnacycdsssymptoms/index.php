<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PregnacyCdssSymptomsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pregnacy Cdss Symptoms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnacy-cdss-symptoms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pregnacy Cdss Symptoms', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_category',            
            'symp_name',
            //'is_multi',
            [
            'attribute' => 'is_multi',
            'format' => 'boolean'
            ],              
            [
            'attribute' => 'is_selected',
            'format' => 'boolean'
            ],           
            'symp_notes',
            'id_order',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
