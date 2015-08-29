<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinmasukkota */

$this->title = $model->id_imkbkab;
$this->params['breadcrumbs'][] = ['label' => 'Izinmasukkotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinmasukkota-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_imkbkab], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_imkbkab], [
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
            'id_imkbkab',
            'id_akun',
            'nomor_imkbkab',
            'diberikanKepada_imkbkab',
            'nama_imkbkab',
            'alamat_imkbkab',
            'nopol_imkbkab',
            'jenisMerk_imkbkab',
            'nomorRangka_imkbkab',
            'nomorMesin_imkbkab',
            'untuk_imkbkab',
            'syaratSyarat_imkbkab:ntext',
            'awalIzinBerlaku_imkbkab',
            'akhirIzinBerlaku_imkbkab',
            'tglPerizinan_imkbkab',
            'keterangan_imkbkab:ntext',
        ],
    ]) ?>

</div>
