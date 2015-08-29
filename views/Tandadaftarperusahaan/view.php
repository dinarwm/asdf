<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tandadaftarperusahaan */

$this->title = $model->id_tdp;
$this->params['breadcrumbs'][] = ['label' => 'Tandadaftarperusahaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tandadaftarperusahaan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_tdp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_tdp], [
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
            'id_tdp',
            'id_akun',
            'nomor_tdp',
            'bentukPerusahaan_tdp',
            'namaPerusahaan_tdp',
            'namaPenanggungJawab_tdp',
            'jabatan_tdp',
            'alamatPerusahaan_tdp',
            'noTelpFax_tdp',
            'NPWP_tdp',
            'statusKantor_tdp',
            'statusPendaftaran_tdp',
            'pembarauan_tdp',
            'KBLI_tdp',
            'nomorKBLI_tdp',
            'tglDikeluarkan_tdp',
            'berlaku_tdp',
            'keterangan_tdp:ntext',
        ],
    ]) ?>

</div>
