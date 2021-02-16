<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\helpers\Url;
use yii\bootstrap\ActiveField;
use yii\widgets\DetailView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KlienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'PENILAIAN KINERJA GURU';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Kinerja Guru', 'url' => ['/kg-master/daftarguru']];
$this->params['breadcrumbs'][] = ['label' => $guru['nama_guru']];
$this->params['breadcrumbs'][] = ['label' => 'Kompetensi '.$kompetensi['kompetensi_id'] ];
\yii\web\YiiAsset::register($this);
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
<!-- CODING TABEL HTML -->
<?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary bg-gray-light">
            <div class="box-header with border">
                 <!--HEADER-->
                <h3 class="box-title" style="font-family: 'HP Simplified'">

                     Nama Guru          :  <?=$guru['nama_guru']?><br/>
                     Periode            : <?=$guru['nama_periode']?><br/>
                     Tanggal Penilaian  :  <?=$guru['tgl_penilaian']?><br/>
                </h3>
            </div>
            <div class="table-responsive">
                <div class="box-body" style="font-family: 'HP Simplified'">
                    <div style="width:auto">
                        <table id="customers" style="width:100%" align="center" class="w3-table-all w3-hoverable">
                          
<!-- PERULANGAN KOMPETENSI -->
                          
                    <tr>
                        <th colspan="4" class= "bg-primary" style="text-align: center"> <?php echo 'Penilaian untuk kompetensi'
                        .' '.$kompetensi['kompetensi_id'].':'.' '.$kompetensi['nama_kompetensi']; ?></th>
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
                        $totalskor=0;
                        
                        foreach ($indikator as $key => $indi){
                        $no++;
                        $totalskor+=$indi['nilai'];
                        $maks=count($indi)*2;
                        $presentase=$totalskor/$maks*100;
                    ?>
                    
                    <tr>
                        <td style="text-align: left"><?php echo $no.'.'.$indi['nama_indikator'];?></td>

                        
<!-- PERULANGAN CHECKBOX -->  
                        
                        <td>
                            <input type='radio' name='<?=$indi['kgdetail_id']?>' value='01' 
                            <?php echo ($indi['skor_id']=='01')?'checked':'' ?> /></td>
                        
                        <td>
                            <input type='radio' name='<?=$indi['kgdetail_id']?>' value='02' 
                            <?php echo ($indi['skor_id']=='02')?'checked':'' ?> />
                        </td>
                        
                        <td><input type='radio' name='<?=$indi['kgdetail_id']?>' value='03' 
                            <?php echo ($indi['skor_id']=='03')?'checked':'' ?> /></td> 
                        
                         <?php
                        }
                        ?>
                        
                    </tr>
   
<!-- BUTTON NILAI -->                       
                    <tr>                     
                        <td colspan="3"></td>
                        <td style="text-align: center"><?= Html::submitButton('Nilai', ['class' => 'btn btn-success']) ?></td>        
                    </tr>

<!-- PERULANGAN TOTALSKOR -->                     
                    <tr>
                        <td style="text-align: left"><?php echo 'Total skor untuk kompetensi '.$kompetensi['kompetensi_id'];?></td>
                        <?php for ($x = 1; $x <= 1; $x++) {
                                            echo "<td align='center' colspan='3'>".$totalskor."</td>";  
                                        }
                                    ?>
                    </tr>

<!-- PERULANGAN SKOR MAKSIMUM -->                     
                    <tr>
                        <td style="text-align: left"><?php echo 'Skor maksimum kompetensi '.$kompetensi['kompetensi_id'];?></td>
                        <?php for ($x = 1; $x <= 1; $x++) {
                                           echo "<td align='center' colspan='3'>".$maks."</td>";  
                                        }
                                    ?>
                    </tr>

<!-- PERULANGAN PERSENTASE -->                     
                    <tr>
                        <td style="text-align: left"><?php echo 'Persentase  ';?></td>
                       
                        <?php echo "<td align='center' colspan='3'>".round($presentase)."%</td>";  ?>
                    </tr>

<!-- PERULANGAN NILAI KOMPETENSI -->                     
                    <tr>
                        <td style="text-align: left"><?php echo 'Nilai untuk kompetensi '.$kompetensi['kompetensi_id'];?></td>
                       
                        <?php if ($presentase >= 75 && $presentase <= 100 ) {
                                           echo "<td align='center' colspan='3'>4</td>";
                              }
                              else if ($presentase > 50 && $presentase < 75) {
                                           echo "<td align='center' colspan='3'>3</td>";
                                        }
                              else if ($presentase >= 25 && $presentase <= 50) {
                                           echo "<td align='center' colspan='3'>2</td>";
                                        }
                              else if ($presentase > 0 && $presentase < 25) {
                                           echo "<td align='center' colspan='3'>1</td>";
                                        }
                              else if ($presentase = 0) {
                                           echo "<td align='center' colspan='3'>0</td>";
                                        }
                              else{
                                           echo "<td align='center' colspan='3'> data salah! </td>";
                                        }
                                    ?>
                    </tr>
                    <tr> 
                        <td colspan="4" ></td>
                                        
                    </tr>
                    
                    
                               
                        </table>
                        <p style="text-align: right"><br>
                            <?= Html::a('< Kembali', ['daftarguru'], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Kompetensi 2 >', ['nilaikompetensi2'], ['class' => 'btn btn-primary']) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <?php ActiveForm::end(); ?>