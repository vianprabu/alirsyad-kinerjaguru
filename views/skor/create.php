<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Skor */

$this->title = 'Create Skor';
$this->params['breadcrumbs'][] = ['label' => 'Skor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skor-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
