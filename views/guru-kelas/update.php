<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GuruKelas */

$this->title = 'Update Guru Kelas: ' . $model->gk_id;
$this->params['breadcrumbs'][] = ['label' => 'Guru Kelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gk_id, 'url' => ['view', 'id' => $model->gk_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guru-kelas-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
