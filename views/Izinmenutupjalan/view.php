<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinmenutupjalan */

$this->title = $model->id_imj;
$this->params['breadcrumbs'][] = ['label' => 'Izinmenutupjalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinmenutupjalan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_imj], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_imj], [
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
            'id_imj',
            'id_akun',
            'nomor_imj',
            'tglDikeluarkan_imj',
            'tglPengajuan_imj',
            'kepada_imj',
            'alamat_imj',
            'namaAcara_imj',
            'jalanDitutup_imj',
            'penutupanJalanMaksimal_imj',
            'tglAcara_imj',
            'JamAcara_imj',
            'tglAcaraSelesai_imj',
            'jamAcaraSelesai_imj',
            'tembusan_imj:ntext',
            'keterangan_imj:ntext',
        ],
    ]) ?>

</div>
