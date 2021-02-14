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
  background-color: #00a65a;
  color: white;
}
</style>

<!-- CODING TABEL HTML -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary bg-blue-light">
            <div class="box-header with border">
            </div>
            <?php $form = ActiveForm::begin(['method' => 'GET']); ?>
                
                <!-- DROPDOWNLIST TAHUN -->
                <div col-md-2 >
                <?php 
    
                    $periode= app\models\Periode::find()->all();
                    $listPeriode= yii\helpers\ArrayHelper::map($periode,'periode_id','nama_periode');
                            echo $form->field($model, 'periode_id')->widget(Select2::classname(), [
                            'data' => $listPeriode,
                            'language' => 'id',
                            'options' => ['placeholder' => '--- Pilih Periode ---'],
                            'pluginOptions' => [
                                    'allowClear' => true,
                                    'width' =>  '250px',           
                            ],
                      ])->label('');
                            Html::submitButton('Proses', ['class' => 'btn btn-primary'])
                ?>
                </div>
                <!-- TOMBOL PROSES -->
                    <?= Html::submitButton('Proses', ['class' => 'btn btn-primary']) ?>
                <?php ActiveForm::end(); ?>
            
            <div class="table-responsive">
                <div class="box-body" style="font-family: 'HP Simplified'">
                    <div style="width:auto">
                        <table id="customers" style="width:100%" align="center" class="w3-table-all w3-hoverable">
                           <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],
                                    'kg_master.kgmaster_id',
                                    'guru.nama_guru',
                                    'Nilai',
                                    'Jumlah Kompetensi yang telah dinilai',

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

