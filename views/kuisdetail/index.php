<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KuisdetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kuisdetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuisdetail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kuisdetail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kuisdetail_id',
            'kuismaster_id',
            'pernyataan_id',
            'nilai_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
