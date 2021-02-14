<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KgDetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kg-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kgdetail_id') ?>

    <?= $form->field($model, 'kgmaster_id') ?>

    <?= $form->field($model, 'indikator_id') ?>

    <?= $form->field($model, 'skor_id') ?>

    <?= $form->field($model, 'tgl_nilai') ?>

    <?php // echo $form->field($model, 'penilai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
