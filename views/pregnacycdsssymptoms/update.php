<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssSymptoms */

$this->title = 'Update Pregnacy CDSS Symptom: ' . ' ' . $model->symp_name;
$this->params['breadcrumbs'][] = ['label' => 'Pregnacy Cdss Symptoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pregnacy-cdss-symptoms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
