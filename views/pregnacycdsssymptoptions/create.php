<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssSymptOptions */

$this->title = 'Create Pregnacy CDSS Symptom Options';
$this->params['breadcrumbs'][] = ['label' => 'Pregnacy CDSS Symptom Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnacy-cdss-sympt-options-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
