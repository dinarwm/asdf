<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Suratizinusahaperdagangan */

$this->title = $model->id_siup;
$this->params['breadcrumbs'][] = ['label' => 'Suratizinusahaperdagangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suratizinusahaperdagangan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_siup], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_siup], [
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
            'id_siup',
            'id_akun',
            'nomor_siup',
            'bentukPerusahaan_siup',
            'namaPerusahaan_siup',
            'namaPenanggungJawab_siup',
            'jabatan_siup',
            'alamatPerusahaan_siup',
            'noTelpFax_siup',
            'modalKekayaanBersih_siup',
            'NPWP_siup',
            'kelembagaan_siup',
            'KBLI_siup',
            'barangJasa_siup',
            'tglDikeluarkan_siup',
            'berlaku_siup',
            'keterangan_siup:ntext',
        ],
    ]) ?>

</div>
