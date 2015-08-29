<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinpenetapanlokasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinpenetapanlokasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ipl') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_ipl') ?>

    <?= $form->field($model, 'namaLokasi_ipl') ?>

    <?= $form->field($model, 'namaPemohon_ipl') ?>

    <?php // echo $form->field($model, 'atasNama_ipl') ?>

    <?php // echo $form->field($model, 'alamat_ipl') ?>

    <?php // echo $form->field($model, 'nomorPermohonan_ipl') ?>

    <?php // echo $form->field($model, 'tglPermohonan_ipl') ?>

    <?php // echo $form->field($model, 'perihalPermohonan_ipl') ?>

    <?php // echo $form->field($model, 'tglPenetapan_ipl') ?>

    <?php // echo $form->field($model, 'nomorPenetapan_ipl') ?>

    <?php // echo $form->field($model, 'tglKoordinasi_ipl') ?>

    <?php // echo $form->field($model, 'desaKel_ipl') ?>

    <?php // echo $form->field($model, 'kecamatan_ipl') ?>

    <?php // echo $form->field($model, 'batasUtara_ipl') ?>

    <?php // echo $form->field($model, 'batasTimur_ipl') ?>

    <?php // echo $form->field($model, 'batasSelatan_ipl') ?>

    <?php // echo $form->field($model, 'batasBarat_ipl') ?>

    <?php // echo $form->field($model, 'tglDikeluarkan_ipl') ?>

    <?php // echo $form->field($model, 'tembusan_ipl') ?>

    <?php // echo $form->field($model, 'keterangan_ipl') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
