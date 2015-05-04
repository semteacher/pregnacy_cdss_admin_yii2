<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PregnancyCdssDeceaces */

$this->title = $model->dec_name;
$this->params['breadcrumbs'][] = ['label' => 'Pregnancy CDSS Deceaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pregnancy-cdss-deceaces-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'dec_name',
            'dec_note',
            'p',
        ],
    ]) ?>

</div>
