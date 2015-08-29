<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinreklame */

$this->title = $model->id_ir;
$this->params['breadcrumbs'][] = ['label' => 'Izinreklames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinreklame-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ir], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ir], [
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
            'id_ir',
            'id_akun',
            'nomorSuratIzin_ir',
            'namaPemohon_ir',
            'tanggalPermohonan_ir',
            'alamat_ir',
            'macamReklame_ir',
            'bunyiReklame_ir:ntext',
            'jumlahReklame_ir',
            'ukuranReklame_ir',
            'tempatPemasangan_ir:ntext',
            'lamaPemasangan_ir',
            'tglMulaiPemasangan_ir',
            'tglAkhirPemasangan_ir',
            'keterangan_ir:ntext',
        ],
    ]) ?>

</div>
