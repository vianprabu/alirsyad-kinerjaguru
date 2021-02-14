<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KuismasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kuismaster-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kuismaster_id') ?>

    <?= $form->field($model, 'kgmaster_id') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'siswa_id') ?>

    <?= $form->field($model, 'jenis') ?>

    <?php // echo $form->field($model, 'tgl_pengisian') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
