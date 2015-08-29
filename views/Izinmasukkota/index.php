<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzinmasukkotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izinmasukkotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinmasukkota-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Izinmasukkota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_imkbkab',
            'id_akun',
            'nomor_imkbkab',
            'diberikanKepada_imkbkab',
            'nama_imkbkab',
            // 'alamat_imkbkab',
            // 'nopol_imkbkab',
            // 'jenisMerk_imkbkab',
            // 'nomorRangka_imkbkab',
            // 'nomorMesin_imkbkab',
            // 'untuk_imkbkab',
            // 'syaratSyarat_imkbkab:ntext',
            // 'awalIzinBerlaku_imkbkab',
            // 'akhirIzinBerlaku_imkbkab',
            // 'tglPerizinan_imkbkab',
            // 'keterangan_imkbkab:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
