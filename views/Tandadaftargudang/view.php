<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tandadaftargudang */

$this->title = $model->id_tdg;
$this->params['breadcrumbs'][] = ['label' => 'Tandadaftargudangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tandadaftargudang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_tdg], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_tdg], [
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
            'id_tdg',
            'id_akun',
            'nomor_tdg',
            'jenisPerusahaanPerorangan_tdg',
            'namaPerusahaan_tdg',
            'AlamatPerusahaanPerorangan_tdg',
            'namaPemilikPenguasa_tdg',
            'alamatPemilikPenguasa_tdg',
            'nomorSiup_tdg',
            'tglSiup_tdg',
            'tempatSiup_tdg',
            'suratIzinUsahaIndustri_tdg',
            'NPWP_tdg',
            'namaJalan_tdg',
            'desaKelurahan_tdg',
            'kecamatan_tdg',
            'luasGudang_tdg',
            'tanggalSurat_tdg',
            'keterangan_tdg:ntext',
        ],
    ]) ?>

</div>
