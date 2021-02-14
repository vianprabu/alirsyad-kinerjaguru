<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pernyataan */

$this->title = 'Update Pernyataan: ' . $model->pernyataan_id;
$this->params['breadcrumbs'][] = ['label' => 'Pernyataan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pernyataan_id, 'url' => ['view', 'id' => $model->pernyataan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pernyataan-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
