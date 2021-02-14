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

$this->title = 'PROPORSI PENILAIAN';
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
                PROPORSI PENILAIAN UNTUK TIAP KOMPETENSI
            </h3>
            <div class="table-responsive">
                <div class="box-body" style="font-family: 'HP Simplified'">
                    <div style="width:auto">
                        <table id="customers" style="width:100%" align="center" class="w3-table-all w3-hoverable">
                          
<!-- PERULANGAN KOMPETENSI -->
                    <?php
                        foreach ($rekapkompetensi as $key => $rekap){
                    ?>        
                    <tr>
                        <th colspan="4" class= "bg-primary" style="text-align: center"> <?php echo 'Penilaian untuk kompetensi'
                        .' '.$rekap['kompetensi_id'].':'.' '.$rekap['nama_kompetensi']; ?></th>
                    </tr> 
                    
<!-- INDIKATOR + SKOR -->                   
                    <tr>
                        <td rowspan="2" width='700px' style="vertical-align : middle;text-align:center;" ><b> Indikator </b></td>
                        <td colspan="3" style="text-align: center" ><b> Skor </b></td>
                    </tr>
                    
                    <tr>
                        <td colspan="1" ><b>Tidak ada bukti (Tidak terpenuhi)</b></td>
                        <td colspan="1" ><b>Terpenuhi sebagian</b></td>
                        <td colspan="1" ><b>Seluruhnya terpenuhi</b></td>
                    </tr>
                    
<!-- PERULANGAN NAMA INDIKATOR -->                   
                    <?php
                        $no = 0;
                        foreach ($indikator as $key => $indi){
                        $no++;
                    ?>
                    
                    <tr>
                        <td style="text-align: left"><?php echo $no.'.'.$indi['nama_indikator'];?></td>

                        
<!-- PERULANGAN CHECKBOX -->  
                        
                        <td><input type='radio' name='skor' value='0'/></td>
                        <td><input type='radio' name='skor' value='1'/></td>
                        <td><input type='radio' name='skor' value='2'/></td> 
                        
                         <?php
                        }
                        ?>
                        
                    </tr>
                    

<!-- BUTTON NILAI -->                       
                    <tr>                     
                        <td colspan="3"></td>
                        <td style="text-align: center"><?= Html::a('Nilai', ['#'], ['class' => 'btn btn-success']) ?></td>        
                    </tr>

<!-- PERULANGAN TOTALSKOR -->                     
                    <tr>
                        <td style="text-align: left"><?php echo 'Total skor untuk kompetensi '.$rekap['kompetensi_id'];?></td>
                        <?php for ($x = 1; $x <= 1; $x++) {
                                            echo "<td colspan='3'>";  
                                        }
                                    ?>
                    </tr>

<!-- PERULANGAN SKOR MAKSIMUM -->                     
                    <tr>
                        <td style="text-align: left"><?php echo 'Skor maksimum kompetensi '.$rekap['kompetensi_id']
                                .' = <b>jumlah indikator ×2</b>';?></td>
                        <?php for ($x = 1; $x <= 1; $x++) {
                                            echo "<td colspan='3'>";  
                                        }
                                    ?>
                    </tr>

<!-- PERULANGAN PERSENTASE -->                     
                    <tr>
                        <td style="text-align: left"><?php echo 'Persentase = <b>(total skor/10) ×100%</b>';?></td>
                       
                        <?php for ($x = 1; $x <= 1; $x++) {
                                            echo "<td colspan='3'>";  
                                        }
                                    ?>
                    </tr>

<!-- PERULANGAN NILAI KOMPETENSI -->                     
                    <tr>
                        <td style="text-align: left"><?php echo 'Nilai untuk kompetensi '.$rekap['kompetensi_id'].'<br>'
                                .'<b>(0% < X ≤ 25% = 1; 25% < X ≤ 50% =2;'.'<br>'.'50% < X ≤ 75% = 3; 75% < X ≤ 100% =4)</b>';?></td>
                       
                        <?php for ($x = 1; $x <= 1; $x++) {
                                            echo "<td colspan='3'>";  
                                        }
                                    ?>
                    </tr>
                    <tr> 
                        <td colspan="4" ></td>
                                        
                    </tr>
                    
                    <?php
                        
                    }
                    ?>
                               
                        </table>
                       
                    </div>
                </div>
            </div><br><br>
            
            <h3 align="center">
                PROPORSI NILAI TOTAL PENILAIAN KINERJA GURU
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
                        foreach ($totalkompetensi as $key => $total){
                        $no++;
                    ?>
                    <tr>
                        <td style="text-align: center"><?php echo $no?></td>
                        <td> <?php echo $total['nama_kompetensi']; ?></td>
                        <td> </td>
                       
                    </tr>    
                    <?php
                    }
                    ?>
                    <tr>
                        <td colspan="2"><b>Jumlah (Hasil penilaian kinerja guru)</b></th>
                        <td> </td>
                    </tr>
                    <tr>
                        <td colspan="2">Konversi nilai PK GURU ke dalam skala 0 – 100 <br> Nilai PK Guru (100) = </th>
                        <td> </td>
                    </tr>
                        </table>
                        <?php echo '*) Nilai diisi berdasarkan laporan dan evaluasi PK Guru. Nilai minimum per kompetensi = 1 dan nilai maksimum =4';?>
                        
                    </div> 
                </div>
            </div><br><br>
            
            <h3 align="center">
                PROPORSI NILAI TOTAL KUISIONER KINERJA GURU
            </h3>
            <div class="table-responsive">
                <div class="box-body" style="font-family: 'HP Simplified'">
                    <div style="width:auto">
                       
                        <table id="customers" style="width:100%" align="center" class="w3-table-all w3-hoverable">
                          <tr>
                                <th border-color="#FFA800" class= "bg-primary" style="text-align: center">No</th>
                                <th class= "bg-primary" style="text-align: center">Penilaian</th>
                                <th class= "bg-primary" style="text-align: center">Hasil Penilaian Skala 100</th>
                                <th class= "bg-primary" style="text-align: center">Proporsi</th>
                                <th width='300px' class= "bg-primary" style="text-align: center">Nilai</th>
                            </tr>
                            
<!-- PERULANGAN ISI TABEL KOMPETENSI -->
                    <tr>
                        <td style="text-align: center">(1)</td>
                        <td style="text-align: center">(2)</td>
                        <td style="text-align: center">(3)</td>
                        <td style="text-align: center">(4)</td>
                        <td style="text-align: center">(3) x (4)</td>
                    </tr>
                    <tr>
                        <td style="text-align: center">1</td>
                        <td > Atasan (Kepala Sekolah/ Pengawas/Guru Senior).</td>
                        <td style="text-align: center">(16)</td>
                        <td style="text-align: center">70%</td>
                        <td style="text-align: center">(17)</td>
                    </tr>
                    <tr>
                        <td style="text-align: center">2</td>
                        <td>Rerata kuesioner kinerja oleh Guru Teman Sejawat.</td>
                        <td style="text-align: center">(18)</td>
                        <td style="text-align: center">15%</td>
                        <td style="text-align: center">(19)</td>
                    </tr>
                    <tr>
                        <td style="text-align: center">3</td>
                        <td>Rerata kuesioner kinerja oleh Peserta Didik.</td>
                        <td style="text-align: center">(20)</td>
                        <td style="text-align: center">15%</td>
                        <td style="text-align: center">(21)</td>
                    </tr> 
                    
                    <tr>
                        <td colspan="2">Nilai PKG = <b>Jumlah Nilai</b></th>
                        <td colspan="3" style="text-align: center">(22) </td>
                    </tr>
                    <tr>
                        <td colspan="2">Tidak Hadir Tanpa Keterangan = <b>(a hari)</b></th>
                        <td colspan="3" style="text-align: center">(23) </td>
                    </tr>
                    <tr>
                        <td colspan="2">Persentase Nilai PKG dari Kehadiran = <b>100% - (a/46) x 100%</b></th>
                        <td colspan="3" style="text-align: center">(24) </td>
                    </tr>
                    <tr>
                        <td colspan="2">Nilai Akhir PKG = <b>Nilai PKG x Persentase Nilai PKG dari Kehadiran</b></th>
                        <td colspan="3" style="text-align: center">(25) </td>
                    </tr>
                    <tr>
                        <td colspan="2">Sebutan</th>
                        <td style="text-align: center">Nilai Presentase Kinerja (NPK)</td>
                        <td style="text-align: center">(26)</td>
                        <td style="text-align: center">(27)</td>
                    </tr>
                    <tr>
                        <td colspan="2">Angka Kredit = <b>((AKK-AKPKB-AKP) x JM/JWM x NPK) : 4</b></th>
                        <td colspan="3" style="text-align: center">(28)</td>
                    </tr>
                    
                        </table>
 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

