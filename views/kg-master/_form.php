<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KgMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kg-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kgmaster_id')->textInput(['maxlength' => true]) ?>

    <?php
    $guru = app\models\Guru::find()->all();
    $listData = yii\helpers\ArrayHelper::map($guru, 'nip', 'nip');
    ?>

    <?= $form->field($model, 'nip')->dropDownList($listData) ?>

    <?php
    $periode = app\models\Periode::find()->all();
    $listData2 = yii\helpers\ArrayHelper::map($periode, 'periode_id', 'periode_id');
    ?>

    <?= $form->field($model, 'periode_id')->dropDownList($listData2) ?>

    <?= $form->field($model, 'tgl_penilaian')->textInput() ?>

    <?= $form->field($model, 'jml_tdkhadir')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
