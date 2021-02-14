<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KgMaster */

$this->title = 'Create Kinerja Guru Master';
$this->params['breadcrumbs'][] = ['label' => 'Kinerja Guru Master', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kg-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
