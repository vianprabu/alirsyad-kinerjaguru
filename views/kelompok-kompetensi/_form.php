<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KelompokKompetensi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kelompok-kompetensi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kk_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
