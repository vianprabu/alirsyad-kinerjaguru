<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kompetensi */

$this->title = 'Create Kompetensi';
$this->params['breadcrumbs'][] = ['label' => 'Kompetensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kompetensi-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
