<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Siswa */

$this->title = 'Update Siswa: ' . $model->nama_siswa;
$this->params['breadcrumbs'][] = ['label' => 'Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_siswa, 'url' => ['view', 'id' => $model->siswa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siswa-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
