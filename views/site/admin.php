<?php
use webvimark\modules\UserManagement\components\GhostMenu;
use webvimark\modules\UserManagement\UserManagementModule;
use webvimark\modules\UserManagement\models\User;
/* @var $this yii\web\View */

$this->title = '';
?>
<style>
         th {background-image: linear-gradient(to right, #00a65a 0%, #00CDAC  51%, #00a65a  100%)}
         th {
            
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 5px;
            
          }

          th:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
    
         .btn-grad {background-image: linear-gradient(to right, #348F50 0%, #56B4D3  51%, #348F50  100%)}
         .btn-grad {
            margin-left: 10px;
            padding: 15px 20px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 5px;
            
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
          
         .btn-grad1 {background-image: linear-gradient(to right, #EB3349 0%, #F45C43  51%, #EB3349  100%)}
         .btn-grad1 {
            margin-left: 10px;
            padding: 15px 20px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 5px;
           
          }

          .btn-grad1:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
         
</style>
<div class="site-index">

    
        <h1 align="center">PENILAIAN KINERJA GURU AL IRSYAD</h1>
    

    <div class="body-content">

<!-- BARIS 1-->
        <div class="row">
            <table style="width:60%" align="center" class="table table-bordered table-striped" >
                <tr>          
                    <th class= "bg-primary" style="text-align: center">KETENTUAN UMUM</th>   
                    <th class= "bg-primary" style="text-align: center">PENILAIAN GURU MAPEL/KELAS</th>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td ><a style="width:50px;height: 30px" class="btn btn-grad" href="web/index.php?r=guru%2Fpetunjuk"></a> <b>Petunjuk Penggunaan</b> <br><br>
                    <a style="width:50px;height: 30px" class="btn btn-grad" href="web/index.php?r=guru%2Fproporsi"></a> <b>Proporsi Penilaian</b>
                </td>
                <td>
                    <?php
                        $iskepsekolah=User::hasRole(['Kepala Sekolah'], $superAdminAllowed = true);
                        if($iskepsekolah):
                        ?>
                    <a style="width:50px;height: 30px" class="btn btn-grad" href="web/index.php?r=kg-master%2Fdaftarguru"></a> <b>Oleh Kepala Sekolah</b><br><br>
                    <?php endif; ?>
                    <a style="width:50px;height: 30px" class="btn btn-grad1" href="web/index.php?r=kg-master%2Fnilaitotal"></a> <b>Nilai PK Guru Mapel/Kelas</b>
                </td>     
            </tr>
            </table>
        </div>

<!-- BARIS 2-->
        <div class="row">
            <table style="width:60%" align="center" class="table table-bordered table-striped">
                <tr >          
                    <th class= "bg-primary" style="text-align: center">DATA PENILAIAN</th>   
                    <th class= "bg-primary" style="text-align: center">KUISIONER GURU MAPEL/KELAS</th>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td ><a style="width:50px;height: 30px" class="btn btn-grad" href="web/index.php?r=guru%2Fdata"></a> <b>Data Guru dan Penilai</b><br><br>
                        <a style="width:50px;height: 30px" class="btn btn-grad" href="web/index.php?r=guru%2Fdatakehadiran"></a> <b>Data Kehadiran</b><br><br>
                        <p style="text-align: center"><b>
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
                              echo $hari_indonesia[$hari].', '.$tanggal.' '.$bln.' '.$tahun;
                              ?></b>
                        </p>
                        
                    </td>
                    <td>
                        <?php
                        $isguru=User::hasRole(['Guru'], $superAdminAllowed = true);
                        if($isguru):
                        ?>
                        <a style="width:50px;height: 30px" class="btn btn-grad" href="web/index.php?r=kuismaster%2Fdaftarkuissejawat"></a> <b>Oleh Teman Sejawat</b>
                        <?php endif; ?>
                        
                        <br><br>
                       <?php
                        $issiswa=User::hasRole(['Siswa'], $superAdminAllowed = true);
                        if($issiswa):
                        ?>
                        <a style="width:50px;height: 30px" class="btn btn-grad" href="web/index.php?r=kuismaster%2Fdaftarkuissiswa"></a> <b>Oleh Peserta Didik</b><br><br>
                        
                        <?php endif; ?>
                        <a style="width:50px;height: 30px" class="btn btn-grad1" href="web/index.php?r=kuismaster%2Fnilaikuis"></a> <b>Nilai KK Guru Mapel/Kelas</b>
                    </td>  
                </tr>
            </table>
        </div>
    </div>
</div>
