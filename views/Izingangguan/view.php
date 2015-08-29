<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izingangguan */

$this->title = $model->id_ig;
$this->params['breadcrumbs'][] = ['label' => 'Izingangguans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izingangguan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ig], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ig], [
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
            'id_ig',
            'id_akun',
            'nomor_ig',
            'namaPengusaha_ig',
            'alamatPengusaha_ig',
            'namaPerusahaan_ig',
            'alamatPerusahaan_ig',
            'tglPermohonan_ig',
            'tglBeritaAcara_ig',
            'atasTanahMilik_ig',
            'statusTanah_ig',
            'luasTanah_ig',
            'luasBangunan_ig',
            'lokasiTanah_ig',
            'batasUtara_ig',
            'batasTimur_ig',
            'batasSelatan_ig',
            'batasBarat_ig',
            'tglDitetapkan_ig',
            'keterangan_ig:ntext',
        ],
    ]) ?>

</div>
