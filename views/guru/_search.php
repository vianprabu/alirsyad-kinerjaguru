<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GuruSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guru-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'instansi_id') ?>

    <?= $form->field($model, 'nama_guru') ?>

    <?= $form->field($model, 'nuptk') ?>

    <?= $form->field($model, 'tempat_tgllahir') ?>

    <?php // echo $form->field($model, 'jabatan') ?>

    <?php // echo $form->field($model, 'tmt') ?>

    <?php // echo $form->field($model, 'masa_kerja') ?>

    <?php // echo $form->field($model, 'jn_kelamin') ?>

    <?php // echo $form->field($model, 'pend_terakhir') ?>

    <?php // echo $form->field($model, 'bidang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
