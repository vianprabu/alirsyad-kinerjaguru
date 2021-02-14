<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KompetensiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kompetensi';
$this->params['breadcrumbs'][] = $this->title;
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    #masters {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#masters td, #masters th {
  border: 1px solid #ddd;
  padding: 8px;
}

#masters th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #00a65a;
  color: white;
}
</style>

<div class="kompetensi-index">

    <br><p>
        <?= Html::a('Create Kompetensi', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kompetensi_id',
            'kk_id',
            'kk.nama_kk',
            'nama_kompetensi',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}{update}{delete}'],
        ],
        'tableOptions' =>['class' => 'table w3-table-all','id' => 'masters'],
    ]); ?>


</div>
