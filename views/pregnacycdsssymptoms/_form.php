<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper; // load classes
use app\models\PregnacyCdssSymptCategory;

/* @var $this yii\web\View */
/* @var $model app\models\PregnacyCdssSymptoms */
/* @var $form yii\widgets\ActiveForm */

$dataList=ArrayHelper::map(PregnacyCdssSymptCategory::find()->asArray()->all(), 'id', 'cat_name');
?>

<div class="pregnacy-cdss-symptoms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'id_category')->textInput() ?>
    <?=$form->field($model, 'id_category')->dropDownList($dataList, 
         ['prompt'=>'--- Choose a Category: ---']) ?>
    
    <?= $form->field($model, 'symp_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'symp_notes')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'is_multi')->checkbox() ?>

    <?= $form->field($model, 'is_selected')->checkbox() ?>
    
    <?= $form->field($model, 'id_order')->textInput() ?>    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
