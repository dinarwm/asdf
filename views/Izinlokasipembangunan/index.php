<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinlokasipembangunanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinlokasipembangunans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinlokasipembangunan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinlokasipembangunan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ilp',
            'id_akun:ntext',
            'nomor_ilp',
            'namaLokasi_ilp',
            'namaPemohon_ilp',
            // 'atasNama_ilp',
            // 'tglPermohonan_ilp',
            // 'alamat_ilp',
            // 'desaKel_ilp',
            // 'kecamatan_ilp',
            // 'tglBeritaAcara_ilp',
            // 'nomorBeritaAcara_ilp',
            // 'alamatPerusahaan_ilp',
            // 'letakTanah_ilp',
            // 'luasTanah_ilp',
            // 'buktiPemilikanTanah_ilp',
            // 'batasUtara_ilp',
            // 'batasTimur_ilp',
            // 'batasSelatan_ilp',
            // 'batasBarat_ilp',
            // 'tglDikeluarkan_ilp',
            // 'tembusan_ilp:ntext',
            // 'keterangan_ilp:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
