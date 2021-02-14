<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>
    
    <?php 
    
    $instansi= app\models\Instansi::find()->all();
    $listData= yii\helpers\ArrayHelper::map($instansi,'instansi_id','instansi_id');
            ?>
    
    <?= $form->field($model, 'instansi_id')->dropDownList($listData,) ?>

    <?= $form->field($model, 'nama_guru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nuptk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_tgllahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'masa_kerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jn_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pend_terakhir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidang')->textInput(['maxlength' => true]) ?>
    
     <?php 
    
                    $guru= app\models\Guru::find()->all();
                    $listGuru= yii\helpers\ArrayHelper::map($guru,'nip','nama_guru');
                            ?>
                    <?= $form->field($model, 'nip')->dropDownList($listGuru,) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
