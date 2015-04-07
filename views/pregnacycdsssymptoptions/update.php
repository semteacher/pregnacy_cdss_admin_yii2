<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssSymptOptions */

$this->title = 'Update Pregnacy Cdss Sympt Options: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pregnacy Cdss Sympt Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pregnacy-cdss-sympt-options-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
