<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>
    
    <?php 
    
    $instansi= app\models\Instansi::find()->all();
    $listData= yii\helpers\ArrayHelper::map($instansi,'instansi_id','nama_instansi');
            ?>
    
    <?= $form->field($model, 'instansi_id')->dropDownList($listData,) ?>

    <?= $form->field($model, 'nama_guru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nuptk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Pilih tanggal...'],
    'pluginOptions' => [
        'autoclose'=>true,
        'format'=> 'yyyy-mm-dd'
    ]
]); ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmt')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Pilih tanggal...'],
    'pluginOptions' => [
        'autoclose'=>true,
        'format'=> 'yyyy-mm-dd'
    ]
]); ?>

    <?= $form->field($model, 'masa_kerja')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'jn_kelamin')->dropDownList(
            ['Laki-laki' => 'Laki - laki', 'Perempuan' => 'Perempuan'],['prompt'=>'Pilih...']
    ); ?>

    <?php
    echo $form->field($model, 'pend_terakhir')->dropDownList(
            ['D3' => 'D3', 'S1' => 'S1','S2' => 'S2', 'S3' => 'S3'],['prompt'=>'Pilih...']
    ); ?>

    <?= $form->field($model, 'bidang')->textInput(['maxlength' => true]) ?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
