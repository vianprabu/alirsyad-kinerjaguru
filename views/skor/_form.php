<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Skor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'skor_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_skor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bobot_skor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
