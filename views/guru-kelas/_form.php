<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GuruKelas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guru-kelas-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?php 
    $kelas= app\models\Kelas::find()->all();
    $listData= yii\helpers\ArrayHelper::map($kelas,'kelas_id','nama_kelas');
            ?>
    <?= $form->field($model, 'kelas_id')->dropDownList($listData,) ?>
    
    <?php 
    $guru= app\models\Guru::find()->all();
    $listData1= yii\helpers\ArrayHelper::map($guru,'nip','nama_guru');
            ?>
    <?= $form->field($model, 'nip')->dropDownList($listData1,) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
