<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = 'Create Guru';
$this->params['breadcrumbs'][] = ['label' => 'Guru', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
