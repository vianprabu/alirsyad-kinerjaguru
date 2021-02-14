<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DatadukungKg */

$this->title = 'Create Data Dukung Kinerja Guru';
$this->params['breadcrumbs'][] = ['label' => 'Data Dukung Kinerja Guru', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadukung-kg-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
