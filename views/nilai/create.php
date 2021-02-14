<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nilai */

$this->title = 'Create Nilai';
$this->params['breadcrumbs'][] = ['label' => 'Nilai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
