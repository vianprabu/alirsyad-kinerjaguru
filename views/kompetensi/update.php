<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kompetensi */

$this->title = 'Update Kompetensi: ' . $model->kompetensi_id;
$this->params['breadcrumbs'][] = ['label' => 'Kompetensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kompetensi_id, 'url' => ['view', 'id' => $model->kompetensi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kompetensi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
