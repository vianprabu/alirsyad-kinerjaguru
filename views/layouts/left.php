<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use webvimark\modules\UserManagement\components\GhostMenu;
use webvimark\modules\UserManagement\UserManagementModule;
use webvimark\modules\UserManagement\models\User;

AppAsset::register($this);
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/alirsyad.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'encodeLabels'=>false,
                'activateParents'=>true,
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    
                    ['label' => 'Master Penilaian',
                    'items' => [
                        ['label' => 'Instansi', 'url' => ['/instansi/index']],
                        ['label' => 'Guru', 'url' => ['/guru/index']],
                        ['label' => 'Kinerja', 'url' => ['/kg-master/index']],
                        ['label' => 'Kelas', 'url' => ['/kelas/index']],
                        ['label' => 'Guru Kelas', 'url' => ['/guru-kelas/index']],
                        ['label' => 'Siswa', 'url' => ['/siswa/index']],
                        ['label' => 'Kelompok Kompetensi', 'url' => ['/kelompok-kompetensi/index']],
                        ['label' => 'Kompetensi', 'url' => ['/kompetensi/index']],
                        ['label' => 'Indikator', 'url' => ['/indikator/index']],
                        ['label' => 'Data Dukung', 'url' => ['/datadukung-kg/index']],
                        ['label' => 'Skor', 'url' => ['/skor/index']],
                        ],'visible'=>User::hasRole(['admin'], $superAdminAllowed = true)],
                    
                    ['label' => 'Master Kuisioner',
                    'items' => [
                        ['label' => 'Kuisioner', 'url' => ['/kuismaster/index']],
                        ['label' => 'Kelompok Komponen', 'url' => ['/kelompok-komponen/index']],
                        ['label' => 'Komponen', 'url' => ['/komponen/index']],
                        ['label' => 'Pernyataan', 'url' => ['/pernyataan/index']],
                        ['label' => 'Nilai', 'url' => ['/nilai/index']],
                        ],'visible'=>User::hasRole(['admin'], $superAdminAllowed = true)],
                    
                    ['label' => 'Setting',
                    'items' => [
                        ['label' => 'Periode', 'url' => ['/periode/index']],
                        ],'visible'=>User::hasRole(['admin'], $superAdminAllowed = true)],
                    
                    ['label' => 'Setting Users',
			'items'=>UserManagementModule::menuItems(),'visible'=>User::hasRole(['admin'], $superAdminAllowed = true)],
                    
                    /*['label' => 'Laporan',
                    'items' => [
                        
                    ['label' => 'Edit', 'url' => ['/klien/index'],'visible'=>User::hasRole(['admin'], $superAdminAllowed = true)],

                       ],'visible'=>!Yii::$app->user->isGuest 
                           ],
                     * 
                     */
                    ['label' => 'Biodata Guru', 'url' => ['/guru/updatebyguru'],'visible'=>User::hasRole(['Guru'], $superAdminAllowed = false)],
                    ['label' => 'Biodata Siswa', 'url' => ['/siswa/updatebysiswa'],'visible'=>User::hasRole(['Siswa'], $superAdminAllowed = false)],
                   
                    ['label' => 'Unggah Datadukung', 'url' => ['/datadukung-kg/unggah'],'visible'=>User::hasRole(['Guru'], $superAdminAllowed = false)],
                    ['label' => 'Penilaian', 'url' => ['/site/admin']],
                    /*['label' => 'Penilaian', 'url' => ['/site/kepsekolah'],'visible'=>User::hasRole(['Kepala Sekolah'], $superAdminAllowed = true)],
                    ['label' => 'Penilaian', 'url' => ['/site/guru'],'visible'=>User::hasRole(['Guru'], $superAdminAllowed = true)],
                    ['label' => 'Penilaian', 'url' => ['/site/siswa'],'visible'=>User::hasRole(['Siswa'], $superAdminAllowed = true)],
                     * 
                     */

                
                ],
            ]
        ) ?>

    </section>

</aside>
