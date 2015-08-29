<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinmendirikanbangunanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinmendirikanbangunans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinmendirikanbangunan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinmendirikanbangunan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_imb',
            'id_akun',
            'nomorPermohonanFormulir_imb',
            'namaPemohon_imb',
            'tempatLahir_imb',
            // 'tglLahir_imb',
            // 'pekerjaan_imb',
            // 'alamat_imb',
            // 'lokasiBangunan_imb',
            // 'namaBangunan_imb',
            // 'jenisBangunan_imb',
            // 'kondisiBangunan_imb',
            // 'luasBangunan_imb',
            // 'indeksTerintegrasi_imb',
            // 'ibgPermanen_imb',
            // 'ibgTingkat_imb',
            // 'ibgKepemilikan_imb',
            // 'hsbg_imb',
            // 'indeksPengaliWilayah_imb',
            // 'indeksPengaliJalan_imb',
            // 'fungsiBangunan_imb',
            // 'statusTanah_imb',
            // 'luasTanah_imb',
            // 'tinggiBangunan_imb',
            // 'tanahMilik_imb',
            // 'rooiJalan_imb',
            // 'batasUtara_imb',
            // 'batasTimur_imb',
            // 'batasSelatan_imb',
            // 'batasBarat_imb',
            // 'tglPermohonanFormulir_imb',
            // 'keterangan_imb:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
