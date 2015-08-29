<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinusahapertambangan */

$this->title = $model->id_iup;
$this->params['breadcrumbs'][] = ['label' => 'Izinusahapertambangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinusahapertambangan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_iup], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_iup], [
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
            'id_iup',
            'id_akun',
            'nomor_iup',
            'namaPemohon_iup',
            'alamatPemohon_iup',
            'tglPermohonan_iup',
            'tglPeninjauan_iup',
            'namaUsaha_iup',
            'komoditas_iup',
            'desaKel_iup',
            'kecamatan_iup',
            'kapasitas_iup',
            'jangkaWaktu_iup',
            'produksi_iup',
            'tglDikeluarkan_iup',
            'keterangan_iup:ntext',
        ],
    ]) ?>

</div>
