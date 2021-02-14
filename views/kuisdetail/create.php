<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kuisdetail */

$this->title = 'Create Kuisdetail';
$this->params['breadcrumbs'][] = ['label' => 'Kuisdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuisdetail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
