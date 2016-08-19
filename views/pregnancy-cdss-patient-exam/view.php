<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PregnancyCdssPatientExam */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pregnancy Cdss Patient Exams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnancy-cdss-patient-exam-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?//= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?//= Html::a('Delete', ['delete', 'id' => $model->id], [
          //  'class' => 'btn btn-danger',
          //  'data' => [
         //       'confirm' => 'Are you sure you want to delete this item?',
         //       'method' => 'post',
         //   ],
       // ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date',
            'pid',
            'user',
            'groupname',
            'authorized',
            'activity',
            'encounter',
            'createuser',
            'createdate',
            'is_firstpregnancy',
            'expect_disease',
            'diseases:ntext',
            'id_finaldisease',
            'finaldisease',
            'finaldisease_icd10',
        ],
    ]) ?>

</div>
