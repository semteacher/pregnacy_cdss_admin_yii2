<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PregnacyCdssSymptOptionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pregnacy Cdss Sympt Options';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnacy-cdss-sympt-options-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pregnacy Cdss Sympt Options', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_symptom',
            'opt_name',
            'id_order',
            'is_selected',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
