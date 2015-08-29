<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinpenetapanlokasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinpenetapanlokasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpenetapanlokasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinpenetapanlokasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ipl',
            'id_akun',
            'nomor_ipl',
            'namaLokasi_ipl',
            'namaPemohon_ipl',
            // 'atasNama_ipl',
            // 'alamat_ipl',
            // 'nomorPermohonan_ipl',
            // 'tglPermohonan_ipl',
            // 'perihalPermohonan_ipl',
            // 'tglPenetapan_ipl',
            // 'nomorPenetapan_ipl',
            // 'tglKoordinasi_ipl',
            // 'desaKel_ipl',
            // 'kecamatan_ipl',
            // 'batasUtara_ipl',
            // 'batasTimur_ipl',
            // 'batasSelatan_ipl',
            // 'batasBarat_ipl',
            // 'tglDikeluarkan_ipl',
            // 'tembusan_ipl:ntext',
            // 'keterangan_ipl:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
