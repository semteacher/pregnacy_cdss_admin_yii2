<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssDeceaces */

$this->title = 'Create Pregnacy CDSS Deceace';
$this->params['breadcrumbs'][] = ['label' => 'Pregnacy CDSS Deceaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnacy-cdss-deceaces-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
