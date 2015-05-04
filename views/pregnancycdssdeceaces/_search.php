<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PregnancyCdssDeceacesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pregnancy-cdss-deceaces-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dec_name') ?>

    <?= $form->field($model, 'dec_note') ?>

    <?= $form->field($model, 'dec_icd10') ?>

    <?= $form->field($model, 'p') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
