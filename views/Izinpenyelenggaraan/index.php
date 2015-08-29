<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinpenyelenggaraanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinpenyelenggaraans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpenyelenggaraan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinpenyelenggaraan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ip',
            'id_akun',
            'nomor_ip',
            'nama_ip',
            'alamat_ip',
            // 'tglPermohonan_ip',
            // 'noPermohonan_ip',
            // 'namaAcara_ip',
            // 'tglMulaiAcara_ip',
            // 'tglAkhirAcara_ip',
            // 'jamAcara_ip',
            // 'tempatAcara_ip',
            // 'HTM_ip',
            // 'tembusan_ip:ntext',
            // 'keterangan_ip:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
