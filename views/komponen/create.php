<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Komponen */

$this->title = 'Create Komponen';
$this->params['breadcrumbs'][] = ['label' => 'Komponen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="komponen-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
