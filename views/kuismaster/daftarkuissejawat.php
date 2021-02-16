<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\helpers\Url;
use yii\bootstrap\ActiveField;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GuruSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'KUISIONER KINERJA GURU';
$this->params['breadcrumbs'][] = 'Kuisioner Kinerja Guru';
?>

<!-- CODING TABEL HTML -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary bg-blue-light">
            <div class="box-header with border">
                
            </div>
           
                <?php
                $periode = app\models\Periode::find()->all();
                $listPeriode = yii\helpers\ArrayHelper::map($periode, 'periode_id', 'nama_periode');
                
                $nip = app\models\Guru::find()->all();
                $listNip = yii\helpers\ArrayHelper::map($nip, 'nip', 'nip');
                
                $guru = app\models\KgMaster::find()->all();
                $listGuru = yii\helpers\ArrayHelper::map($guru, 'guru.nama_guru', 'guru.nama_guru');
                ?>

                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    
                    'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            [
                            'attribute' => 'nama_guru',
                            'value' => 'guru.nama_guru',
                            'filterType' => GridView::FILTER_SELECT2,
                            'filter' => $listGuru,
                            'filterWidgetOptions' => [
                                'pluginOptions' => ['allowClear' => true],
                            ],
                            'filterInputOptions' => ['placeholder' => 'Cari Guru ...', 'id' => 'grid-kgmaster-search-guru']
                        ],
                        [
                            'attribute' => 'nip',
                            'value' => 'nip',
                            'filterType' => GridView::FILTER_SELECT2,
                            'filter' => $listNip,
                            'filterWidgetOptions' => [
                                'pluginOptions' => ['allowClear' => true],
                            ],
                            'filterInputOptions' => ['placeholder' => 'Cari NIP ...', 'id' => 'grid-kgmaster-search-nip']
                        ],
                        
                            ['class' => 'yii\grid\ActionColumn', 'template' => '{kuissejawat}'],
                    ],
                    'tableOptions' =>['class' => 'table w3-table-all w3-hoverable','id' => 'customers'],
                ]);
                ?>
                           
                        </table>
                    </div>
                </div>
            </div>

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