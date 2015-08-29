<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinusahatokomodern */

$this->title = $model->id_iutp;
$this->params['breadcrumbs'][] = ['label' => 'Izinusahatokomoderns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinusahatokomodern-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_iutp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_iutp], [
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
            'id_iutp',
            'id_akun',
            'nomor_iutp',
            'nama_iutp',
            'alamat_iutp',
            'tglPermohonan_iutp',
            'nomorPermohonan_iutp',
            'noTelepon_iutp',
            'namaPerusahaan_iutp',
            'jenisUsaha_iutp',
            'lokasiUsaha_iutp',
            'tglDitetapkan_iutp',
            'keterangan_iutp:ntext',
        ],
    ]) ?>

</div>
