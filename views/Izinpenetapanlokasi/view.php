<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpenetapanlokasi */

$this->title = $model->id_ipl;
$this->params['breadcrumbs'][] = ['label' => 'Izinpenetapanlokasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpenetapanlokasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ipl], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ipl], [
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
            'id_ipl',
            'id_akun',
            'nomor_ipl',
            'namaLokasi_ipl',
            'namaPemohon_ipl',
            'atasNama_ipl',
            'alamat_ipl',
            'nomorPermohonan_ipl',
            'tglPermohonan_ipl',
            'perihalPermohonan_ipl',
            'tglPenetapan_ipl',
            'nomorPenetapan_ipl',
            'tglKoordinasi_ipl',
            'desaKel_ipl',
            'kecamatan_ipl',
            'batasUtara_ipl',
            'batasTimur_ipl',
            'batasSelatan_ipl',
            'batasBarat_ipl',
            'tglDikeluarkan_ipl',
            'tembusan_ipl:ntext',
            'keterangan_ipl:ntext',
        ],
    ]) ?>

</div>
