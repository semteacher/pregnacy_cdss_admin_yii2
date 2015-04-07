<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssSymptCategory */

$this->title = 'Create Pregnacy Cdss Sympt Category';
$this->params['breadcrumbs'][] = ['label' => 'Pregnacy Cdss Sympt Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnacy-cdss-sympt-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
