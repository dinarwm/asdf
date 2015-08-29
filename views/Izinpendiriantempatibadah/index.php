<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinpendiriantempatibadahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinpendiriantempatibadahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpendiriantempatibadah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinpendiriantempatibadah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ipti',
            'id_akun',
            'nomor_ipti',
            'nama_ipti',
            'alamat_ipti',
            // 'noPermohonan_ipti',
            // 'perihalPermohonan_ipti',
            // 'tglBeritaAcara_ipti',
            // 'tglRekomendasi_ipti',
            // 'noRekomendasi_ipti',
            // 'alamatBangunan_ipti',
            // 'atasTanahMilik_ipti',
            // 'persilNo_ipti',
            // 'luasTanah_ipti',
            // 'luasBangunan_ipti',
            // 'desa_ipti',
            // 'kecamatan_ipti',
            // 'batasUtara_ipti',
            // 'batasTimur_ipti',
            // 'batasSelatan_ipti',
            // 'batasBarat_ipti',
            // 'tglDitetapkan_ipti',
            // 'tembusan_ipti:ntext',
            // 'keterangan_ipti:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
