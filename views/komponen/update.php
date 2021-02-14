<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Komponen */

$this->title = 'Update Komponen: ' . $model->komponen_id;
$this->params['breadcrumbs'][] = ['label' => 'Komponen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->komponen_id, 'url' => ['view', 'id' => $model->komponen_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="komponen-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
