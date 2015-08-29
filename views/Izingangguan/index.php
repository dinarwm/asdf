<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzingangguanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izingangguans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izingangguan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izingangguan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ig',
            'id_akun',
            'nomor_ig',
            'namaPengusaha_ig',
            'alamatPengusaha_ig',
            // 'namaPerusahaan_ig',
            // 'alamatPerusahaan_ig',
            // 'tglPermohonan_ig',
            // 'tglBeritaAcara_ig',
            // 'atasTanahMilik_ig',
            // 'statusTanah_ig',
            // 'luasTanah_ig',
            // 'luasBangunan_ig',
            // 'lokasiTanah_ig',
            // 'batasUtara_ig',
            // 'batasTimur_ig',
            // 'batasSelatan_ig',
            // 'batasBarat_ig',
            // 'tglDitetapkan_ig',
            // 'keterangan_ig:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
