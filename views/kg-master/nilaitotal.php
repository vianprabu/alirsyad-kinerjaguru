<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\helpers\Url;
use yii\bootstrap\ActiveField;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KlienSearch */
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
        <div class="box box-primary bg-gray-light">
            <div class="box-header with border">
            </div>
            <h3 align="center">
                REKAP HASIL PENILAIAN KINERJA GURU <br> KELAS/MATA PELAJARAN
            </h3>
            <div class="table-responsive">
                <div class="box-body" style="font-family: 'HP Simplified'">
                    <div style="width:auto">
                        <table id="customers" style="width:100%" align="center" class="w3-table-all w3-hoverable">
                          <tr>
                                <th class= "bg-primary" style="text-align: center">NO</th>
                                <th class= "bg-primary" style="text-align: center">KOMPETENSI</th>
                                <th width='300px' class= "bg-primary" style="text-align: center">NILAI </th>
                            </tr>
                            
<!-- PERULANGAN ISI TABEL KOMPETENSI -->
                    <?php
                        $no = 0;
                        foreach ($rekapkompetensi as $key => $kompetensi){
                        $no++;
                    ?>
                    <tr>
                        <td style="text-align: center"><?php echo $no?></td>
                        <td> <?php echo $kompetensi['nama_kompetensi']; ?></td>
                        <td> </td>
                       
                    </tr>    
                    <?php
                    }
                    ?>
                    <tr>
                        <td colspan="2"><b>Jumlah</b></th>
                        <td> </td>
                    </tr>
                    <tr>
                        <td colspan="2">Nilai PK Guru = </th>
                        <td> </td>
                    </tr>
                        </table>
                        <?php echo '*) Nilai diisi berdasarkan laporan dan evaluasi PK Guru. Nilai minimum per kompetensi = 1 dan nilai maksimum =4';?>
                        
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

