<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinmendirikanbangunan */

$this->title = $model->id_imb;
$this->params['breadcrumbs'][] = ['label' => 'Izinmendirikanbangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinmendirikanbangunan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_imb], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_imb], [
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
            'id_imb',
            'id_akun',
            'nomorPermohonanFormulir_imb',
            'namaPemohon_imb',
            'tempatLahir_imb',
            'tglLahir_imb',
            'pekerjaan_imb',
            'alamat_imb',
            'lokasiBangunan_imb',
            'namaBangunan_imb',
            'jenisBangunan_imb',
            'kondisiBangunan_imb',
            'luasBangunan_imb',
            'indeksTerintegrasi_imb',
            'ibgPermanen_imb',
            'ibgTingkat_imb',
            'ibgKepemilikan_imb',
            'hsbg_imb',
            'indeksPengaliWilayah_imb',
            'indeksPengaliJalan_imb',
            'fungsiBangunan_imb',
            'statusTanah_imb',
            'luasTanah_imb',
            'tinggiBangunan_imb',
            'tanahMilik_imb',
            'rooiJalan_imb',
            'batasUtara_imb',
            'batasTimur_imb',
            'batasSelatan_imb',
            'batasBarat_imb',
            'tglPermohonanFormulir_imb',
            'keterangan_imb:ntext',
        ],
    ]) ?>

</div>
