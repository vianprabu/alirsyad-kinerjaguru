<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = 'Nama Siswa : '.$model->nama_siswa;
$this->params['breadcrumbs'][] = ['label' => 'Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->nama_siswa;
\yii\web\YiiAsset::register($this);
?>
<div class="siswa-view">

    <p>
        <?= Html::a('Update', ['updatebysiswa'], ['class' => 'btn btn-primary']) ?>
       
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'siswa_id',
            'kelas_id',
            'nama_siswa',
        ],
    ]) ?>

</div>
