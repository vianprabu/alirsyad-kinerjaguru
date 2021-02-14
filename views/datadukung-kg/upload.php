<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\DatadukungKg */

$this->title = 'Upload Data Dukung Kinerja Guru';
$this->params['breadcrumbs'][] = ['label' => 'Data Dukung Kinerja Guru', 'url' => ['unggah']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadukung-kg-create">

    <?php $form = ActiveForm::begin(); ?>
    
    <?php 
    $kgdetail= app\models\KgDetail::find()->all();
    $listData= yii\helpers\ArrayHelper::map($kgdetail,'kgdetail_id','kgdetail_id');
            ?>
    <?= $form->field($model, 'kgdetail_id')->dropDownList($listData,) ?>
    
    <?= $form->field($model, 'datadukung_id')->textInput() ?>
    
    <?php echo $form->field($model, 'nama_file[]')
                    ->fileInput(['multiple'=>'multiple']); ?>

    <?= $form->field($model, 'tgl_upload')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
