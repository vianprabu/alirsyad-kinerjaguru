<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kuisdetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kuisdetail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kuisdetail_id')->textInput(['maxlength' => true]) ?>
    
    <?php 
    $kuismaster= app\models\Kuismaster::find()->all();
    $listData= yii\helpers\ArrayHelper::map($kuismaster,'kuismaster_id','kuismaster_id');
            ?>
    <?= $form->field($model, 'kuismaster_id')->dropDownList($listData,) ?>
    
    <?php 
    $pernyataan= app\models\Pernyataan::find()->all();
    $listData1= yii\helpers\ArrayHelper::map($pernyataan,'pernyataan_id','pernyataan_id');
            ?>
    <?= $form->field($model, 'pernyataan_id')->dropDownList($listData1,) ?>
    
    <?php 
    $nilai= app\models\Nilai::find()->all();
    $listData2= yii\helpers\ArrayHelper::map($nilai,'nilai_id','nilai_id');
            ?>
    <?= $form->field($model, 'nilai_id')->dropDownList($listData2,) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
