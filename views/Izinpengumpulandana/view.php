<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpengumpulandana */

$this->title = $model->id_ipd;
$this->params['breadcrumbs'][] = ['label' => 'Izinpengumpulandanas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpengumpulandana-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ipd], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ipd], [
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
            'id_ipd',
            'id_akun',
            'nomorSK_ipd',
            'namaPemohon_ipd',
            'alamat_ipd',
            'tglPermohonan_ipd',
            'perihalPermohonan_ipd',
            'caraPengumpulanDana_ipd',
            'rincian_ipd',
            'tglMulai_ipd',
            'tglSelesai_ipd',
            'tglDitetapkan_ipd',
            'menimbangPoinA_ipd:ntext',
            'tembusan_ipd:ntext',
            'keterangan_ipd:ntext',
        ],
    ]) ?>

</div>
