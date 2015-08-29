<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinusahapertambanganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinusahapertambangans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinusahapertambangan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinusahapertambangan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_iup',
            'id_akun',
            'nomor_iup',
            'namaPemohon_iup',
            'alamatPemohon_iup',
            // 'tglPermohonan_iup',
            // 'tglPeninjauan_iup',
            // 'namaUsaha_iup',
            // 'komoditas_iup',
            // 'desaKel_iup',
            // 'kecamatan_iup',
            // 'kapasitas_iup',
            // 'jangkaWaktu_iup',
            // 'produksi_iup',
            // 'tglDikeluarkan_iup',
            // 'keterangan_iup:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
