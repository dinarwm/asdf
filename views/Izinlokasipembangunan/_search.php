<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinlokasipembangunanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinlokasipembangunan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ilp') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_ilp') ?>

    <?= $form->field($model, 'namaLokasi_ilp') ?>

    <?= $form->field($model, 'namaPemohon_ilp') ?>

    <?php // echo $form->field($model, 'atasNama_ilp') ?>

    <?php // echo $form->field($model, 'tglPermohonan_ilp') ?>

    <?php // echo $form->field($model, 'alamat_ilp') ?>

    <?php // echo $form->field($model, 'desaKel_ilp') ?>

    <?php // echo $form->field($model, 'kecamatan_ilp') ?>

    <?php // echo $form->field($model, 'tglBeritaAcara_ilp') ?>

    <?php // echo $form->field($model, 'nomorBeritaAcara_ilp') ?>

    <?php // echo $form->field($model, 'alamatPerusahaan_ilp') ?>

    <?php // echo $form->field($model, 'letakTanah_ilp') ?>

    <?php // echo $form->field($model, 'luasTanah_ilp') ?>

    <?php // echo $form->field($model, 'buktiPemilikanTanah_ilp') ?>

    <?php // echo $form->field($model, 'batasUtara_ilp') ?>

    <?php // echo $form->field($model, 'batasTimur_ilp') ?>

    <?php // echo $form->field($model, 'batasSelatan_ilp') ?>

    <?php // echo $form->field($model, 'batasBarat_ilp') ?>

    <?php // echo $form->field($model, 'tglDikeluarkan_ilp') ?>

    <?php // echo $form->field($model, 'tembusan_ilp') ?>

    <?php // echo $form->field($model, 'keterangan_ilp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
