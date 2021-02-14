<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Siswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'siswa_id')->textInput(['maxlength' => true]) ?>
    
    <?php 
    $kelas= app\models\Kelas::find()->all();
    $listData= yii\helpers\ArrayHelper::map($kelas,'kelas_id','nama_kelas');
            ?>
    <?= $form->field($model, 'kelas_id')->dropDownList($listData,) ?>

    <?= $form->field($model, 'nama_siswa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
