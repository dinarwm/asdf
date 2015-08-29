<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TandadaftarindustriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tandadaftarindustri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tdi') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_tdi') ?>

    <?= $form->field($model, 'namaPerusahaan_tdi') ?>

    <?= $form->field($model, 'alamatPerusahaan_tdi') ?>

    <?php // echo $form->field($model, 'nomorTelepon_tdi') ?>

    <?php // echo $form->field($model, 'NPWP_tdi') ?>

    <?php // echo $form->field($model, 'NIPIK_tdi') ?>

    <?php // echo $form->field($model, 'namaPemilik_tdi') ?>

    <?php // echo $form->field($model, 'alamatPemilik_tdi') ?>

    <?php // echo $form->field($model, 'KBLI_tdi') ?>

    <?php // echo $form->field($model, 'KKI_tdi') ?>

    <?php // echo $form->field($model, 'desaKelurahanPabrik_tdi') ?>

    <?php // echo $form->field($model, 'kecamatanPabrik_tdi') ?>

    <?php // echo $form->field($model, 'mesinUtama_tdi') ?>

    <?php // echo $form->field($model, 'mesinPembantu_tdi') ?>

    <?php // echo $form->field($model, 'tenagaPenggerak_tdi') ?>

    <?php // echo $form->field($model, 'nilaiInvestasi_tdi') ?>

    <?php // echo $form->field($model, 'terbilang_tdi') ?>

    <?php // echo $form->field($model, 'kapasitasProduksiTerpasang_tdi') ?>

    <?php // echo $form->field($model, 'tglDitetapkan_tdi') ?>

    <?php // echo $form->field($model, 'keterangan_tdi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
