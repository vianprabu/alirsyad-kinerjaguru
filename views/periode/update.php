<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Periode */

$this->title = 'Update Periode: ' . $model->periode_id;
$this->params['breadcrumbs'][] = ['label' => 'Periode', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->periode_id, 'url' => ['view', 'id' => $model->periode_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="periode-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
