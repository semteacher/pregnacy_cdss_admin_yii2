<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssDeceasesSymptOpt */

$this->title = 'Create Pregnacy Cdss Deceases Sympt Opt';
$this->params['breadcrumbs'][] = ['label' => 'Pregnacy Cdss Deceases Sympt Opts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnacy-cdss-deceases-sympt-opt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
