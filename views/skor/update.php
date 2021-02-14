<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Skor */

$this->title = 'Update Skor: ' . $model->skor_id;
$this->params['breadcrumbs'][] = ['label' => 'Skor', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->skor_id, 'url' => ['view', 'id' => $model->skor_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skor-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
