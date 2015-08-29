<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TandadaftargudangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tandadaftargudangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tandadaftargudang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tandadaftargudang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tdg',
            'id_akun',
            'nomor_tdg',
            'jenisPerusahaanPerorangan_tdg',
            'namaPerusahaan_tdg',
            // 'AlamatPerusahaanPerorangan_tdg',
            // 'namaPemilikPenguasa_tdg',
            // 'alamatPemilikPenguasa_tdg',
            // 'nomorSiup_tdg',
            // 'tglSiup_tdg',
            // 'tempatSiup_tdg',
            // 'suratIzinUsahaIndustri_tdg',
            // 'NPWP_tdg',
            // 'namaJalan_tdg',
            // 'desaKelurahan_tdg',
            // 'kecamatan_tdg',
            // 'luasGudang_tdg',
            // 'tanggalSurat_tdg',
            // 'keterangan_tdg:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
