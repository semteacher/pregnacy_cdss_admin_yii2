<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssDeceasesSymptOptSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pregnacy-cdss-deceases-sympt-opt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_deceaces') ?>

    <?= $form->field($model, 'id_sympt_opt') ?>

    <?= $form->field($model, 'py') ?>

    <?= $form->field($model, 'pn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
