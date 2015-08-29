<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinperubahanpenggunaantanah */

$this->title = $model->id_ippt;
$this->params['breadcrumbs'][] = ['label' => 'Izinperubahanpenggunaantanahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinperubahanpenggunaantanah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ippt], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ippt], [
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
            'id_ippt',
            'id_akun',
            'nomor_ippt',
            'namaPemohon_ippt',
            'atasNama_ippt',
            'alamat_ippt',
            'tglPermohonan_ippt',
            'nomorBeritaAcara_ippt',
            'tglBeritaAcara_ippt',
            'nomorPertimbanganTeknis_ippt',
            'tglPertimbanganteknis_ippt',
            'letakTanah_ippt',
            'luasTanah_ippt',
            'peruntukanPenggunaanTanah_ippt',
            'batasUtara_ippt',
            'batasTimur_ippt',
            'batasSelatan_ippt',
            'batasBarat_ippt',
            'tglDikeluarkan_ippt',
            'keterangan_ippt:ntext',
        ],
    ]) ?>

</div>
