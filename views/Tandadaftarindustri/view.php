<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tandadaftarindustri */

$this->title = $model->id_tdi;
$this->params['breadcrumbs'][] = ['label' => 'Tandadaftarindustris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tandadaftarindustri-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_tdi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_tdi], [
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
            'id_tdi',
            'id_akun',
            'nomor_tdi',
            'namaPerusahaan_tdi',
            'alamatPerusahaan_tdi',
            'nomorTelepon_tdi',
            'NPWP_tdi',
            'NIPIK_tdi',
            'namaPemilik_tdi',
            'alamatPemilik_tdi',
            'KBLI_tdi',
            'KKI_tdi',
            'desaKelurahanPabrik_tdi',
            'kecamatanPabrik_tdi',
            'mesinUtama_tdi',
            'mesinPembantu_tdi',
            'tenagaPenggerak_tdi',
            'nilaiInvestasi_tdi',
            'terbilang_tdi',
            'kapasitasProduksiTerpasang_tdi',
            'tglDitetapkan_tdi',
            'keterangan_tdi:ntext',
        ],
    ]) ?>

</div>
