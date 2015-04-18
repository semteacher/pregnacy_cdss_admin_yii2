<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssDeceasesSymptOpt */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pregnacy Cdss: Deceases by Symptom Option', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnacy-cdss-deceases-sympt-opt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'id_deceaces',
            [
                'attribute' => 'deceaces.dec_name'
            ],
            [
                'attribute' => 'symptOpt.symptom.symp_name'
            ],
            //'id_sympt_opt',
            [
                'attribute' => 'symptOpt.opt_name'
            ],
            'py',
            'pn',
        ],
    ]) ?>

</div>
