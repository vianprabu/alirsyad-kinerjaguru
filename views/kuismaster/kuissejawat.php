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

$this->title = 'KUISIONER KINERJA GURU';
$this->params['breadcrumbs'][] = ['label' => 'Kuisioner Kinerja Guru', 'url' => ['/kuismaster/daftarkuissejawat']];
$this->params['breadcrumbs'][] = ['label' => 'Kuis Sejawat' ];
$this->params['breadcrumbs'][] = ['label' => $kgmaster->kgmaster_id ];


?>

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
<?php $form = ActiveForm::begin(); ?>
<!-- CODING TABEL HTML -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary bg-gray-light">
            <div class="box-header with border">
                <h3 class="box-title" style="font-family: 'HP Simplified'">
                    <?php 
                                $tgl=date('d M Y');
                                $tanggal=date('d');
                                $tahun=date('Y');
                                $hari   = date('l', microtime($tgl));
                                $hari_indonesia = array('Monday'  => 'Senin',
                                'Tuesday'  => 'Selasa',
                                'Wednesday' => 'Rabu',
                                'Thursday' => 'Kamis',
                                'Friday' => 'Jumat',
                                'Saturday' => 'Sabtu',
                                'Sunday' => 'Minggu');
                                
                                $bulan = array(
                                    '01' => 'Januari',
                                    '02' => 'Februari',
                                    '3' => 'Maret',
                                    '4' => 'April',
                                    '5' => 'Mei',
                                    '6' => 'Juni',
                                    '7' => 'Juli',
                                    '8' => 'Agustus',
                                    '09' => 'September',
                                    '10' => 'Oktober',
                                    '11' => 'November',
                                    '12' => 'Desember',
                                    );
                                $bl = date('m', strtotime($tgl));
                                $bln = $bulan[$bl];
                              
                              ?>
                     <b> Nama Sekolah       : </b><?=$guru['nama_instansi']?><br/>
                     <b> Nama Guru          : </b><?=$guru['nama_guru']?>   <br/>
                     <b> Matapelajaran/Kelas: </b><?=$guru['bidang']?> / <br/>
                     <b> Hari dan Tanggal   : </b> <?php echo $hari_indonesia[$hari].', '.$tanggal.' '.$bln.' '.$tahun; ?><br/>
                     
                </h3>
            </div>
            <div class="table-responsive">
                <div class="box-body" style="font-family: 'HP Simplified'">
                    <div style="width:auto">
                        <table id="customers" style="width:100%" align="center" class="w3-table-all w3-hoverable">                   
                            <tr>
                                <th rowspan="2" class= "bg-primary" style="vertical-align : middle;text-align:center;" > No </th>
                                <th rowspan="2" class= "bg-primary" style="vertical-align : middle;text-align:center;" > Komponen </th>
                                <th rowspan="2" width='700px' class= "bg-primary" style="vertical-align : middle;text-align:center;" > Pernyataan </th>
                                <th colspan="3" class= "bg-primary" style="text-align: center" > Penilaian </th>
                            </tr>

                            <tr>
                                <th colspan="1" class= "bg-primary" style="text-align: center" >Tidak Pernah</th>
                                <th colspan="1" class= "bg-primary" style="text-align: center" >Kadang - kadang</th>
                                <th colspan="1" class= "bg-primary" style="text-align: center" >Sering</th>
                            </tr>
                    
<!-- PERULANGAN KOMPETENSI -->
                    <?php
                        $nomor = 0;
                        $totalskor=0;
                        $nilai=0;
                        foreach ($rekapkomponen as $key => $rekap){
                            $nomor++;
                    ?>        
                    
<!-- PERULANGAN NAMA INDIKATOR -->                   
                    <?php
                        $no = 0;
                        foreach ($pernyataan as $key => $nyata){
                        $no++;
                    ?>
                    <tr>
                        <td style="text-align: left"><?php echo $nomor ;?></td>
                        <td style="text-align: left"><?php echo $rekap['nama_komponen'];?></td>
                        <td style="text-align: left"><?php echo $no.'.'.$nyata['nama_pernyataan'];?></td>

<!-- PERULANGAN CHECKBOX -->                        
                        
                        <td><input type='radio' name='<?=$nyata['pernyataan_id']?>' value='01' /></td>
                        <td><input type='radio' name='<?=$nyata['pernyataan_id']?>' value='02' /></td>
                        <td><input type='radio' name='<?=$nyata['pernyataan_id']?>' value='03' /></td>       
                        <?php 
                        
                        }
                        ?>
                    </tr>
                    <?php
                        
                    }
                    ?>
                    
<!-- BUTTON NILAI -->
                    <tr>                     
                        <td colspan="3"></td>
                        <td style="text-align: center"><?= Html::submitButton('Nilai', ['class' => 'btn btn-success']) ?></td>        
                    </tr>
                    
                    <!-- PERULANGAN TOTALSKOR -->                     
                    <tr>
                        <td colspan="3" style="text-align: center"><?php echo 'Jumlah Skor' ;?></td>
                        <?php for ($x = 1; $x <= 1; $x++) {
                                            echo "<td colspan='3'>";  
                                        }
                                    ?>
                    </tr>

<!-- PERULANGAN SKOR MAKSIMUM -->                     
                    <tr>
                        <td colspan="3" style="text-align: center"><?php echo 'Skor Maksimum '
                                .' = jumlah indikator ×2';?></td>
                        <?php for ($x = 1; $x <= 1; $x++) {
                                            echo "<td colspan='3'>";  
                                        }
                                    ?>
                    </tr>

<!-- PERULANGAN PERSENTASE -->                     
                    <tr>
                        <td colspan="3" style="text-align: center"><?php echo 'Nilai Kinerja = (Jumlah skor/skor maksimum) x 100 ';?></td>
                       
                        <?php for ($x = 1; $x <= 1; $x++) {
                                            echo "<td colspan='3'>";  
                                        }
                                    ?>
                    </tr>

<!-- PERULANGAN NILAI KOMPETENSI -->                     
                    <tr>
                        <td colspan="3" style="text-align: center"><?php echo 'Sebutan';?></td>
                       
                        <?php for ($x = 1; $x <= 1; $x++) {
                                            echo "<td colspan='3'>";  
                                        }
                                    ?>
                    </tr>
                               
                        </table>
                        <p style="text-align: right"><br>
                            <?= Html::a('< Home', ['/site/index'], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Selanjutnya >', ['/guru/daftarkuissejawat'], ['class' => 'btn btn-primary']) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <?php ActiveForm::end(); ?>

