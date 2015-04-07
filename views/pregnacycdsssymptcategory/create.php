<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssSymptCategory */

$this->title = 'Create Pregnacy CDSS Symptom Category';
$this->params['breadcrumbs'][] = ['label' => 'Pregnacy CDSS Symptom Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnacy-cdss-sympt-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
