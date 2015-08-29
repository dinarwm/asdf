<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinpeminjamanalunalunSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinpeminjamanalunaluns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpeminjamanalunalun-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinpeminjamanalunalun', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ipaa',
            'id_akun',
            'nomor_ipaa',
            'nama_ipaa',
            'alamat_ipaa',
            // 'tglPermohonan_ipaa',
            // 'noPermohonan_ipaa',
            // 'perihalPermohonan_ipaa',
            // 'namaAcara_ipaa',
            // 'tglAwalAcara_ipaa',
            // 'tglAkhirAcara_ipaa',
            // 'jamAcara_ipaa',
            // 'tglDitetapkan_ipaa',
            // 'keterangan_ipaa:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
