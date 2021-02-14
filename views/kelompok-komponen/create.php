<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KelompokKomponen */

$this->title = 'Create Kelompok Komponen';
$this->params['breadcrumbs'][] = ['label' => 'Kelompok Komponen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelompok-komponen-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
