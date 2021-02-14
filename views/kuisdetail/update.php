<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kuisdetail */

$this->title = 'Update Kuisdetail: ' . $model->kuisdetail_id;
$this->params['breadcrumbs'][] = ['label' => 'Kuisdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kuisdetail_id, 'url' => ['view', 'id' => $model->kuisdetail_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kuisdetail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
