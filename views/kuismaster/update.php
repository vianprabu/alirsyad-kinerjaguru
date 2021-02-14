<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kuismaster */

$this->title = 'Update Kuis Master: ' . $model->kuismaster_id;
$this->params['breadcrumbs'][] = ['label' => 'Kuis Master', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kuismaster_id, 'url' => ['view', 'id' => $model->kuismaster_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kuismaster-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
