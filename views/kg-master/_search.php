<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KgMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kg-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kgmaster_id') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'periode_id') ?>

    <?= $form->field($model, 'tgl_penilaian') ?>

    <?= $form->field($model, 'jml_tdkhadir') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
