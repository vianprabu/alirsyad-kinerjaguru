<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = 'Update Guru: ' . $model->nama_guru;
$this->params['breadcrumbs'][] = ['label' => 'Biodata'];
?>
<div class="guru-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
