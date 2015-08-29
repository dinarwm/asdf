<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpenggilinganpadi */

$this->title = $model->id_ipdhdpb;
$this->params['breadcrumbs'][] = ['label' => 'Izinpenggilinganpadis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpenggilinganpadi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ipdhdpb], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ipdhdpb], [
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
            'id_ipdhdpb',
            'id_akun',
            'nomor_ipdhdpb',
            'namaPengusaha_ipdhdpb',
            'alamatPengusaha_ipdhdpb',
            'desaPengusaha_ipdhdpb',
            'kecamatanPengusaha_ipdhdpb',
            'tglPermohonan_ipdhdpb',
            'namaPerusahaan_ipdhdpb',
            'alamatPerusahaan_ipdhdpb',
            'desaPerusahaan_ipdhdpb',
            'kecamatanPerusahaan_ipdhdpb',
            'nomorKode_ipdhdpb',
            'kapasitasPotensial_ipdhdpb',
            'tglLampiran_ipdhdpb',
            'noTenagaPenggerak_ipdhdpb',
            'jenisTenagaPenggerak_ipdhdpb',
            'rpmTenagaPenggerak_ipdhdpb',
            'pkTenagaPenggerak_ipdhdpb',
            'merkTenagaPenggerak_ipdhdpb',
            'jumlahTenagaPenggerak_ipdhdpb',
            'noPeralatan_ipdhdpb',
            'namaJenisPeralatan_ipdhdpb',
            'typePeralatan_ipdhdpb',
            'kapasitasPeralatan_ipdhdpb',
            'merkPeralatan_ipdhdpb',
            'jumlahPeralatan_ipdhdpb',
            'keteranganMesinPeralatan_ipdhdpb',
            'tglDitetapkan_ipdhdpb',
            'keterangan_ipdhdpb:ntext',
        ],
    ]) ?>

</div>
