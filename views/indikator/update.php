<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Indikator */

$this->title = 'Update Indikator: ' . $model->indikator_id;
$this->params['breadcrumbs'][] = ['label' => 'Indikator', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->indikator_id, 'url' => ['view', 'id' => $model->indikator_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="indikator-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
