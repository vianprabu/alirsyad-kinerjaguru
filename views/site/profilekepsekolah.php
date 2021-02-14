<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\helpers\Url;
use yii\bootstrap\ActiveField;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = 'Biodata Kepala Sekolah: ';
$this->params['breadcrumbs'][] = ['label' => 'Biodata Kepala Sekolah'];
?>



<!-- CODING TABEL HTML -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary bg-gray-light">
            <div class="box-header with border">
                
                <?php
		$user=Yii::$app->user->identity->username;
		
		$guru=\app\models\Guru::find()->where(['nip'=>$user])->one();
		echo 'Nama Guru : '.$guru['nama_guru'].'<br>';
                echo 'NIP : '.$guru['nip'].'<br>';
                echo 'Tempat,Tgl Lahir : '.$guru['tempat'].', '.$guru['tgl_lahir'].'<br>';
                echo 'Pendidikan Terakhir : '.$guru['pend_terakhir'].'<br>';
                echo 'Bidang : '.$guru['bidang'].'<br>';
		?>
                
            </div>
            
                        
                    
        </div>
    </div>
</div>

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
