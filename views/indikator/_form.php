<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Indikator */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indikator-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'indikator_id')->textInput(['maxlength' => true]) ?>
    
    <?php 
    
    $kompetensi= app\models\Kompetensi::find()->all();
    $listData= yii\helpers\ArrayHelper::map($kompetensi,'kompetensi_id','kompetensi_id');
            ?>
    
    <?= $form->field($model, 'kompetensi_id')->dropDownList($listData,) ?>

    <?= $form->field($model, 'nama_indikator')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
