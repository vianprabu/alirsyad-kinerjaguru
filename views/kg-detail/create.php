<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KgDetail */

$this->title = 'Create Kinerja Guru Detail';
$this->params['breadcrumbs'][] = ['label' => 'Kinerja Guru Detail', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kg-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
