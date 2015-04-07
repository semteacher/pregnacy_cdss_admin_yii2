<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssSymptoms */

$this->title = 'Create Pregnacy CDSS Symptom';
$this->params['breadcrumbs'][] = ['label' => 'Pregnacy CDSS Symptoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnacy-cdss-symptoms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
