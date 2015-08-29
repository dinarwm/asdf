<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinpengumpulandanaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinpengumpulandanas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpengumpulandana-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinpengumpulandana', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ipd',
            'id_akun',
            'nomorSK_ipd',
            'namaPemohon_ipd',
            'alamat_ipd',
            // 'tglPermohonan_ipd',
            // 'perihalPermohonan_ipd',
            // 'caraPengumpulanDana_ipd',
            // 'rincian_ipd',
            // 'tglMulai_ipd',
            // 'tglSelesai_ipd',
            // 'tglDitetapkan_ipd',
            // 'menimbangPoinA_ipd:ntext',
            // 'tembusan_ipd:ntext',
            // 'keterangan_ipd:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
