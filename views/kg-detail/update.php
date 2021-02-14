<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KgDetail */

$this->title = 'Update Kinerja Guru Detail: ' . $model->kgdetail_id;
$this->params['breadcrumbs'][] = ['label' => 'Kinerja Guru Detail', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kgdetail_id, 'url' => ['view', 'id' => $model->kgdetail_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kg-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
