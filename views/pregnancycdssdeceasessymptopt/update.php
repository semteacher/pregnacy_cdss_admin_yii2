<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PregnancyCdssDeceasesSymptOpt */

$this->title = 'Update Pregnancy CDSS Deceases Sympt Opt: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pregnancy CDSS Deceases Sympt Opts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pregnancy-cdss-deceases-sympt-opt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
