<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PregnacyCdssDeceacesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pregnacy CDSS Deceaces';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnacy-cdss-deceaces-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pregnacy CDSS Deceaces', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'dec_name',
            'dec_note',
            'p',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
