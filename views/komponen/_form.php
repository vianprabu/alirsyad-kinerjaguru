<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Komponen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="komponen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'komponen_id')->textInput(['maxlength' => true]) ?>
    
    <?php 
    $kelompokkomponen= app\models\KelompokKomponen::find()->all();
    $listData= yii\helpers\ArrayHelper::map($kelompokkomponen,'kelkompo_id','nama_kelkompo');
            ?>
    <?= $form->field($model, 'kelkompo_id')->dropDownList($listData,) ?>

    <?= $form->field($model, 'nama_komponen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
