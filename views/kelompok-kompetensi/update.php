<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KelompokKompetensi */

$this->title = 'Update Kelompok Kompetensi: ' . $model->kk_id;
$this->params['breadcrumbs'][] = ['label' => 'Kelompok Kompetensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kk_id, 'url' => ['view', 'id' => $model->kk_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelompok-kompetensi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
