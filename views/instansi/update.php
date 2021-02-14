<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Instansi */

$this->title = 'Update Instansi: ' . $model->instansi_id;
$this->params['breadcrumbs'][] = ['label' => 'Instansi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->instansi_id, 'url' => ['view', 'id' => $model->instansi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="instansi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
