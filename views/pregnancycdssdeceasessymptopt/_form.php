<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper; // load classes
use app\models\PregnancyCdssDeceaces;
use app\models\PregnancyCdssSymptOptions;

/* @var $this yii\web\View */
/* @var $model app\models\PregnancyCdssDeceasesSymptOpt */
/* @var $form yii\widgets\ActiveForm */
$dataList_decease=ArrayHelper::map(PregnancyCdssDeceaces::find()->asArray()->all(), 'id', 'dec_name');
$dataList_symptopt=ArrayHelper::map(PregnancyCdssSymptOptions::find()->with(['symptom'])->asArray()->all(), 'id', 'opt_name', 'symptom.symp_name');
?>

<div class="pregnancy-cdss-deceases-sympt-opt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'id_deceaces')->textInput() ?>
    <?=$form->field($model, 'id_deceaces')->dropDownList($dataList_decease,
        ['prompt'=>'--- Choose a Decease: ---']) ?>

    <?//= $form->field($model, 'id_sympt_opt')->textInput(['maxlength' => 20]) ?>
    <?=$form->field($model, 'id_sympt_opt')->dropDownList($dataList_symptopt,
        ['prompt'=>'--- Choose a Symptom Option: ---']) ?>

    <?= $form->field($model, 'py')->textInput() ?>

    <?= $form->field($model, 'pn')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
