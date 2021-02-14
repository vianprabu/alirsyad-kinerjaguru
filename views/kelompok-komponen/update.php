<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KelompokKomponen */

$this->title = 'Update Kelompok Komponen: ' . $model->kelkompo_id;
$this->params['breadcrumbs'][] = ['label' => 'Kelompok Komponen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kelkompo_id, 'url' => ['view', 'id' => $model->kelkompo_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelompok-komponen-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
