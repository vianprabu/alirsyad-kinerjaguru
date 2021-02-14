<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kuismaster */

$this->title = 'Create Kuis Master';
$this->params['breadcrumbs'][] = ['label' => 'Kuis Master', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuismaster-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
