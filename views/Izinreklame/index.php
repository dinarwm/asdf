<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinreklameSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinreklames';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinreklame-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinreklame', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ir',
            'id_akun',
            'nomorSuratIzin_ir',
            'namaPemohon_ir',
            'tanggalPermohonan_ir',
            // 'alamat_ir',
            // 'macamReklame_ir',
            // 'bunyiReklame_ir:ntext',
            // 'jumlahReklame_ir',
            // 'ukuranReklame_ir',
            // 'tempatPemasangan_ir:ntext',
            // 'lamaPemasangan_ir',
            // 'tglMulaiPemasangan_ir',
            // 'tglAkhirPemasangan_ir',
            // 'keterangan_ir:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
