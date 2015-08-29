<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinpenggilinganpadiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinpenggilinganpadis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpenggilinganpadi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinpenggilinganpadi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ipdhdpb',
            'id_akun',
            'nomor_ipdhdpb',
            'namaPengusaha_ipdhdpb',
            'alamatPengusaha_ipdhdpb',
            // 'desaPengusaha_ipdhdpb',
            // 'kecamatanPengusaha_ipdhdpb',
            // 'tglPermohonan_ipdhdpb',
            // 'namaPerusahaan_ipdhdpb',
            // 'alamatPerusahaan_ipdhdpb',
            // 'desaPerusahaan_ipdhdpb',
            // 'kecamatanPerusahaan_ipdhdpb',
            // 'nomorKode_ipdhdpb',
            // 'kapasitasPotensial_ipdhdpb',
            // 'tglLampiran_ipdhdpb',
            // 'noTenagaPenggerak_ipdhdpb',
            // 'jenisTenagaPenggerak_ipdhdpb',
            // 'rpmTenagaPenggerak_ipdhdpb',
            // 'pkTenagaPenggerak_ipdhdpb',
            // 'merkTenagaPenggerak_ipdhdpb',
            // 'jumlahTenagaPenggerak_ipdhdpb',
            // 'noPeralatan_ipdhdpb',
            // 'namaJenisPeralatan_ipdhdpb',
            // 'typePeralatan_ipdhdpb',
            // 'kapasitasPeralatan_ipdhdpb',
            // 'merkPeralatan_ipdhdpb',
            // 'jumlahPeralatan_ipdhdpb',
            // 'keteranganMesinPeralatan_ipdhdpb',
            // 'tglDitetapkan_ipdhdpb',
            // 'keterangan_ipdhdpb:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
