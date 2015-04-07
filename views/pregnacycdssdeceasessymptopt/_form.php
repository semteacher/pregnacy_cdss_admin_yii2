<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssDeceasesSymptOpt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pregnacy-cdss-deceases-sympt-opt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_deceaces')->textInput() ?>

    <?= $form->field($model, 'id_sympt_opt')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'py')->textInput() ?>

    <?= $form->field($model, 'pn')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
