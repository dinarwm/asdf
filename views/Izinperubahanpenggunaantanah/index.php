<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinperubahanpenggunaantanahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinperubahanpenggunaantanahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinperubahanpenggunaantanah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinperubahanpenggunaantanah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ippt',
            'id_akun',
            'nomor_ippt',
            'namaPemohon_ippt',
            'atasNama_ippt',
            // 'alamat_ippt',
            // 'tglPermohonan_ippt',
            // 'nomorBeritaAcara_ippt',
            // 'tglBeritaAcara_ippt',
            // 'nomorPertimbanganTeknis_ippt',
            // 'tglPertimbanganteknis_ippt',
            // 'letakTanah_ippt',
            // 'luasTanah_ippt',
            // 'peruntukanPenggunaanTanah_ippt',
            // 'batasUtara_ippt',
            // 'batasTimur_ippt',
            // 'batasSelatan_ippt',
            // 'batasBarat_ippt',
            // 'tglDikeluarkan_ippt',
            // 'keterangan_ippt:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
