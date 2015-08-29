<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinusahaindustriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinusahaindustris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinusahaindustri-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinusahaindustri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_iui',
            'id_akun',
            'nomor_iui',
            'tipePerusahaan_iui',
            'namaPerusahaan_iui',
            // 'tglPermohonan_iui',
            // 'NPWP_iui',
            // 'KBLI_iui',
            // 'alamatPerusahaan_iui',
            // 'alamatPabrik_iui',
            // 'tglSuratPernyataan_iui',
            // 'nomorLampiran_iui',
            // 'tglLampiran_iui',
            // 'namaPenanggungJawab_iui',
            // 'alamatPenanggungJawab_iui',
            // 'namaPemilikPerusahaan_iui',
            // 'komoditiIndustri_iui',
            // 'kapasitasTerpasang_iui',
            // 'totalInvestasi_iui',
            // 'terbilang_iui',
            // 'indonesia_iui',
            // 'asing_iui',
            // 'luasGudang_iui',
            // 'no_iui',
            // 'komoditi_iui',
            // 'kapasitas_iui',
            // 'satuan_iui',
            // 'tglDitetapkan_iui',
            // 'keterangan_iui:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
