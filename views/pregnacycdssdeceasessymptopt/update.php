<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssDeceasesSymptOpt */

$this->title = 'Update Pregnacy Cdss Deceases Sympt Opt: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pregnacy Cdss Deceases Sympt Opts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pregnacy-cdss-deceases-sympt-opt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
