<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DatadukungKg */

$this->title = 'Update Data Dukung Kinerja Guru: ' . $model->datadukung_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Dukung Kinerja Guru', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->datadukung_id, 'url' => ['view', 'id' => $model->datadukung_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datadukung-kg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
