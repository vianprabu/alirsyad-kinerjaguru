<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KgDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kg-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kgdetail_id')->textInput(['maxlength' => true]) ?>
    
    <?php 
    $kgmaster= app\models\KgMaster::find()->all();
    $listData1= yii\helpers\ArrayHelper::map($kgmaster,'kgmaster_id','kgmaster_id');
            ?>
    <?= $form->field($model, 'kgmaster_id')->dropDownList($listData1,) ?>
    
    <?php 
    $indikator= app\models\Indikator::find()->all();
    $listData2= yii\helpers\ArrayHelper::map($indikator,'indikator_id','indikator_id');
            ?>
    <?= $form->field($model, 'indikator_id')->dropDownList($listData2,) ?>
    
    <?php 
    $skor= app\models\Instansi::find()->all();
    $listData3= yii\helpers\ArrayHelper::map($skor,'skor_id','skor_id');
            ?>
    <?= $form->field($model, 'skor_id')->dropDownList($listData3,) ?>

    <?= $form->field($model, 'tgl_nilai')->textInput() ?>

    <?= $form->field($model, 'penilai')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
