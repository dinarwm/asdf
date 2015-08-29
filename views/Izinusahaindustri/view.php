<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinusahaindustri */

$this->title = $model->id_iui;
$this->params['breadcrumbs'][] = ['label' => 'Izinusahaindustris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinusahaindustri-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_iui], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_iui], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_iui',
            'id_akun',
            'nomor_iui',
            'tipePerusahaan_iui',
            'namaPerusahaan_iui',
            'tglPermohonan_iui',
            'NPWP_iui',
            'KBLI_iui',
            'alamatPerusahaan_iui',
            'alamatPabrik_iui',
            'tglSuratPernyataan_iui',
            'nomorLampiran_iui',
            'tglLampiran_iui',
            'namaPenanggungJawab_iui',
            'alamatPenanggungJawab_iui',
            'namaPemilikPerusahaan_iui',
            'komoditiIndustri_iui',
            'kapasitasTerpasang_iui',
            'totalInvestasi_iui',
            'terbilang_iui',
            'indonesia_iui',
            'asing_iui',
            'luasGudang_iui',
            'no_iui',
            'komoditi_iui',
            'kapasitas_iui',
            'satuan_iui',
            'tglDitetapkan_iui',
            'keterangan_iui:ntext',
        ],
    ]) ?>

</div>
