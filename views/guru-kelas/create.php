<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GuruKelas */

$this->title = 'Create Guru Kelas';
$this->params['breadcrumbs'][] = ['label' => 'Guru Kelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-kelas-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
