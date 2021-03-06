<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PregnancyCdssDeceacesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pregnancy CDSS Deceaces';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnancy-cdss-deceaces-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pregnancy CDSS Deceaces', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'dec_name',
            'dec_note',
            'dec_icd10',
            'p',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
