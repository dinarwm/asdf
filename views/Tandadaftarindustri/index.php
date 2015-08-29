<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TandadaftarindustriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tandadaftarindustris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tandadaftarindustri-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tandadaftarindustri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tdi',
            'id_akun',
            'nomor_tdi',
            'namaPerusahaan_tdi',
            'alamatPerusahaan_tdi',
            // 'nomorTelepon_tdi',
            // 'NPWP_tdi',
            // 'NIPIK_tdi',
            // 'namaPemilik_tdi',
            // 'alamatPemilik_tdi',
            // 'KBLI_tdi',
            // 'KKI_tdi',
            // 'desaKelurahanPabrik_tdi',
            // 'kecamatanPabrik_tdi',
            // 'mesinUtama_tdi',
            // 'mesinPembantu_tdi',
            // 'tenagaPenggerak_tdi',
            // 'nilaiInvestasi_tdi',
            // 'terbilang_tdi',
            // 'kapasitasProduksiTerpasang_tdi',
            // 'tglDitetapkan_tdi',
            // 'keterangan_tdi:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
