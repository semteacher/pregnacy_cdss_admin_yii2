<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PregnancyCdssDeceaces */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pregnancy-cdss-deceaces-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dec_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'dec_note')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'p')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
