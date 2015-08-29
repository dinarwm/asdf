<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TandadaftarperusahaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tandadaftarperusahaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tandadaftarperusahaan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tandadaftarperusahaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tdp',
            'id_akun',
            'nomor_tdp',
            'bentukPerusahaan_tdp',
            'namaPerusahaan_tdp',
            // 'namaPenanggungJawab_tdp',
            // 'jabatan_tdp',
            // 'alamatPerusahaan_tdp',
            // 'noTelpFax_tdp',
            // 'NPWP_tdp',
            // 'statusKantor_tdp',
            // 'statusPendaftaran_tdp',
            // 'pembarauan_tdp',
            // 'KBLI_tdp',
            // 'nomorKBLI_tdp',
            // 'tglDikeluarkan_tdp',
            // 'berlaku_tdp',
            // 'keterangan_tdp:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
