<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PregnacyCdssSymptCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pregnacy Cdss Sympt Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnacy-cdss-sympt-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pregnacy Cdss Sympt Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cat_name',
            'cat_notes',
            [
            'attribute' => 'is_selected',
            'format' => 'boolean'
            ], 
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
