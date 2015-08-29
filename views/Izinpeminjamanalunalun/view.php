<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpeminjamanalunalun */

$this->title = $model->id_ipaa;
$this->params['breadcrumbs'][] = ['label' => 'Izinpeminjamanalunaluns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpeminjamanalunalun-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ipaa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ipaa], [
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
            'id_ipaa',
            'id_akun',
            'nomor_ipaa',
            'nama_ipaa',
            'alamat_ipaa',
            'tglPermohonan_ipaa',
            'noPermohonan_ipaa',
            'perihalPermohonan_ipaa',
            'namaAcara_ipaa',
            'tglAwalAcara_ipaa',
            'tglAkhirAcara_ipaa',
            'jamAcara_ipaa',
            'tglDitetapkan_ipaa',
            'keterangan_ipaa:ntext',
        ],
    ]) ?>

</div>
