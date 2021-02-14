<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\helpers\Url;
use yii\bootstrap\ActiveField;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GuruSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'PENILAIAN KINERJA GURU';
$this->params['breadcrumbs'][] = $this->title;
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4682B4;
  color: white;
}
</style>

<!-- CODING TABEL HTML -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary bg-blue-light">
            <div class="box-header with border">
            </div>
            <div class="table-responsive">
                <div class="box-body" style="font-family: 'HP Simplified'">
                    <div style="width:auto">
                        <table id="customers" style="width:100%" align="center" class="w3-table-all w3-hoverable">
                           
                           <?= GridView::widget([
                                'dataProvider' => $dataProvider,
             
                                
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],
                                    'kompetensi.nama_kompetensi',
                                    
                                    'Total Nilai',

                                    ['class' => 'yii\grid\ActionColumn', 'template' => '{nilai}'],
                                ],
                                'tableOptions' =>['class' => 'table w3-table-all w3-hoverable','id' => 'customers'],
                            ]); ?>
                               
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

