<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KgMaster */

$this->title = 'Update Kinerja Guru Master: ' . $model->kgmaster_id;
$this->params['breadcrumbs'][] = ['label' => 'Kinerja Guru Master', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kgmaster_id, 'url' => ['view', 'id' => $model->kgmaster_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kg-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
