<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatadukungKgSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datadukung-kg-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'datadukung_id') ?>

    <?= $form->field($model, 'kgdetail_id') ?>

    <?= $form->field($model, 'nama_file') ?>

    <?= $form->field($model, 'tgl_upload') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
