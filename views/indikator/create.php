<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Indikator */

$this->title = 'Create Indikator';
$this->params['breadcrumbs'][] = ['label' => 'Indikator', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indikator-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
