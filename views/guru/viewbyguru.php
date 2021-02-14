<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = 'Nama Guru : '.$model->nama_guru;
$this->params['breadcrumbs'][] = $model->nama_guru;
\yii\web\YiiAsset::register($this);
?>
<div class="guru-view">

    <p>
        <?= Html::a('Update', ['updatebyguru'], ['class' => 'btn btn-primary']) ?>
       
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nip',
            'instansi_id',
            'nama_guru',
            'nuptk',
            'tempat',
            'tgl_lahir',
            'jabatan',
            'tmt',
            'masa_kerja',
            'jn_kelamin',
            'pend_terakhir',
            'bidang',
        ],
    ]) ?>

</div>
