<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pernyataan */

$this->title = 'Create Pernyataan';
$this->params['breadcrumbs'][] = ['label' => 'Pernyataan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pernyataan-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
