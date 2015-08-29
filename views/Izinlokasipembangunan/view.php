<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinlokasipembangunan */

$this->title = $model->id_ilp;
$this->params['breadcrumbs'][] = ['label' => 'Izinlokasipembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinlokasipembangunan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ilp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ilp], [
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
            'id_ilp',
            'id_akun:ntext',
            'nomor_ilp',
            'namaLokasi_ilp',
            'namaPemohon_ilp',
            'atasNama_ilp',
            'tglPermohonan_ilp',
            'alamat_ilp',
            'desaKel_ilp',
            'kecamatan_ilp',
            'tglBeritaAcara_ilp',
            'nomorBeritaAcara_ilp',
            'alamatPerusahaan_ilp',
            'letakTanah_ilp',
            'luasTanah_ilp',
            'buktiPemilikanTanah_ilp',
            'batasUtara_ilp',
            'batasTimur_ilp',
            'batasSelatan_ilp',
            'batasBarat_ilp',
            'tglDikeluarkan_ilp',
            'tembusan_ilp:ntext',
            'keterangan_ilp:ntext',
        ],
    ]) ?>

</div>
