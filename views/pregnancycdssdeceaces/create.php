<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PregnancyCdssDeceaces */

$this->title = 'Create Pregnancy CDSS Deceace';
$this->params['breadcrumbs'][] = ['label' => 'Pregnancy CDSS Deceaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnancy-cdss-deceaces-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
