<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpendiriantempatibadah */

$this->title = $model->id_ipti;
$this->params['breadcrumbs'][] = ['label' => 'Izinpendiriantempatibadahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpendiriantempatibadah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ipti], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ipti], [
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
            'id_ipti',
            'id_akun',
            'nomor_ipti',
            'nama_ipti',
            'alamat_ipti',
            'noPermohonan_ipti',
            'perihalPermohonan_ipti',
            'tglBeritaAcara_ipti',
            'tglRekomendasi_ipti',
            'noRekomendasi_ipti',
            'alamatBangunan_ipti',
            'atasTanahMilik_ipti',
            'persilNo_ipti',
            'luasTanah_ipti',
            'luasBangunan_ipti',
            'desa_ipti',
            'kecamatan_ipti',
            'batasUtara_ipti',
            'batasTimur_ipti',
            'batasSelatan_ipti',
            'batasBarat_ipti',
            'tglDitetapkan_ipti',
            'tembusan_ipti:ntext',
            'keterangan_ipti:ntext',
        ],
    ]) ?>

</div>
