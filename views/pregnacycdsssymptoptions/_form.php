<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper; // load classes
use app\models\PregnacyCdssSymptoms;

/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssSymptOptions */
/* @var $form yii\widgets\ActiveForm */

$dataList=ArrayHelper::map(PregnacyCdssSymptoms::find()->asArray()->all(), 'id', 'symp_name');
?>

<div class="pregnacy-cdss-sympt-options-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'id_symptom')->textInput(['maxlength' => 20]) ?>
        <?=$form->field($model, 'id_symptom')->dropDownList($dataList, 
         ['prompt'=>'--- Choose a Symptom: ---']) ?>

    <?= $form->field($model, 'opt_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'id_order')->textInput() ?>

    <?= $form->field($model, 'is_selected')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
