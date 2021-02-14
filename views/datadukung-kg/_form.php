<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatadukungKg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datadukung-kg-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?php 
    $kgdetail= app\models\KgDetail::find()->all();
    $listData= yii\helpers\ArrayHelper::map($kgdetail,'kgdetail_id','kgdetail_id');
            ?>
    <?= $form->field($model, 'kgdetail_id')->dropDownList($listData,) ?>

    <?= $form->field($model, 'nama_file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_upload')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
