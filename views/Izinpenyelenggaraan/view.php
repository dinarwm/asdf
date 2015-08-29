<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpenyelenggaraan */

$this->title = $model->id_ip;
$this->params['breadcrumbs'][] = ['label' => 'Izinpenyelenggaraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpenyelenggaraan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ip], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ip], [
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
            'id_ip',
            'id_akun',
            'nomor_ip',
            'nama_ip',
            'alamat_ip',
            'tglPermohonan_ip',
            'noPermohonan_ip',
            'namaAcara_ip',
            'tglMulaiAcara_ip',
            'tglAkhirAcara_ip',
            'jamAcara_ip',
            'tempatAcara_ip',
            'HTM_ip',
            'tembusan_ip:ntext',
            'keterangan_ip:ntext',
        ],
    ]) ?>

</div>
