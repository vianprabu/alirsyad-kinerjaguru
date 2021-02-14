<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Siswa */

$this->title = 'Update Siswa: ' . $model->nama_siswa;
$this->params['breadcrumbs'][] = ['label' => 'Biodata'];

?>
<div class="siswa-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
