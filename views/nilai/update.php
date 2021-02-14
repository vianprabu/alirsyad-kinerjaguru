<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nilai */

$this->title = 'Update Nilai: ' . $model->nilai_id;
$this->params['breadcrumbs'][] = ['label' => 'Nilai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nilai_id, 'url' => ['view', 'id' => $model->nilai_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nilai-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
