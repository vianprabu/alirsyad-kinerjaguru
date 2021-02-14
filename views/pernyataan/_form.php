<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pernyataan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pernyataan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pernyataan_id')->textInput(['maxlength' => true]) ?>
    
    <?php 
    $komponen= app\models\Komponen::find()->all();
    $listData= yii\helpers\ArrayHelper::map($komponen,'komponen_id','komponen_id');
            ?>
    <?= $form->field($model, 'komponen_id')->dropDownList($listData,) ?>

    <?= $form->field($model, 'nama_pernyataan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
