<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SuratizinusahaperdaganganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suratizinusahaperdagangans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suratizinusahaperdagangan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Suratizinusahaperdagangan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_siup',
            'id_akun',
            'nomor_siup',
            'bentukPerusahaan_siup',
            'namaPerusahaan_siup',
            // 'namaPenanggungJawab_siup',
            // 'jabatan_siup',
            // 'alamatPerusahaan_siup',
            // 'noTelpFax_siup',
            // 'modalKekayaanBersih_siup',
            // 'NPWP_siup',
            // 'kelembagaan_siup',
            // 'KBLI_siup',
            // 'barangJasa_siup',
            // 'tglDikeluarkan_siup',
            // 'berlaku_siup',
            // 'keterangan_siup:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
