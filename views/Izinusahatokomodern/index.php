<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinusahatokomodernSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinusahatokomoderns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinusahatokomodern-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinusahatokomodern', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_iutp',
            'id_akun',
            'nomor_iutp',
            'nama_iutp',
            'alamat_iutp',
            // 'tglPermohonan_iutp',
            // 'nomorPermohonan_iutp',
            // 'noTelepon_iutp',
            // 'namaPerusahaan_iutp',
            // 'jenisUsaha_iutp',
            // 'lokasiUsaha_iutp',
            // 'tglDitetapkan_iutp',
            // 'keterangan_iutp:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
