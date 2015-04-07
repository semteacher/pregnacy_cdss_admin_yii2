<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PregnacyCdssDeceasesSymptOptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pregnacy Cdss Deceases Sympt Opts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnacy-cdss-deceases-sympt-opt-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pregnacy Cdss Deceases Sympt Opt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_deceaces',
            'id_sympt_opt',
            'py',
            'pn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
