<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kompetensi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kompetensi-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?php 
    
    $kelompokkompetensi= app\models\KelompokKompetensi::find()->all();
    $listData= yii\helpers\ArrayHelper::map($kelompokkompetensi,'kk_id','kk_id');
            ?>
    
    <?= $form->field($model, 'kk_id')->dropDownList($listData,) ?>

    <?= $form->field($model, 'nama_kompetensi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
