<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinmenutupjalanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinmenutupjalans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinmenutupjalan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinmenutupjalan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_imj',
            'id_akun',
            'nomor_imj',
            'tglDikeluarkan_imj',
            'tglPengajuan_imj',
            // 'kepada_imj',
            // 'alamat_imj',
            // 'namaAcara_imj',
            // 'jalanDitutup_imj',
            // 'penutupanJalanMaksimal_imj',
            // 'tglAcara_imj',
            // 'JamAcara_imj',
            // 'tglAcaraSelesai_imj',
            // 'jamAcaraSelesai_imj',
            // 'tembusan_imj:ntext',
            // 'keterangan_imj:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
