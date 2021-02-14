<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kuismaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kuismaster-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kuismaster_id')->textInput(['maxlength' => true]) ?>
    
    <?php 
    $kgmaster= app\models\KgMaster::find()->all();
    $listData= yii\helpers\ArrayHelper::map($kgmaster,'kgmaster_id','kgmaster_id');
            ?>
    <?= $form->field($model, 'kgmaster_id')->dropDownList($listData,) ?>
    
    <?php 
    $guru= app\models\Guru::find()->all();
    $listData1= yii\helpers\ArrayHelper::map($guru,'nip','nama_guru');
            ?>
    <?= $form->field($model, 'nip')->dropDownList($listData1,) ?>
    
     <?php 
    $siswa= app\models\Siswa::find()->all();
    $listData2= yii\helpers\ArrayHelper::map($siswa,'siswa_id','nama_siswa');
            ?>
    <?= $form->field($model, 'siswa_id')->dropDownList($listData2,) ?>

    <?= $form->field($model, 'jenis')->dropDownList([ 'sejawat' => 'Sejawat', 'siswa' => 'Siswa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgl_pengisian')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
