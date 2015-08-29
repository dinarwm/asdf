<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TandadaftargudangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tandadaftargudang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tdg') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_tdg') ?>

    <?= $form->field($model, 'jenisPerusahaanPerorangan_tdg') ?>

    <?= $form->field($model, 'namaPerusahaan_tdg') ?>

    <?php // echo $form->field($model, 'AlamatPerusahaanPerorangan_tdg') ?>

    <?php // echo $form->field($model, 'namaPemilikPenguasa_tdg') ?>

    <?php // echo $form->field($model, 'alamatPemilikPenguasa_tdg') ?>

    <?php // echo $form->field($model, 'nomorSiup_tdg') ?>

    <?php // echo $form->field($model, 'tglSiup_tdg') ?>

    <?php // echo $form->field($model, 'tempatSiup_tdg') ?>

    <?php // echo $form->field($model, 'suratIzinUsahaIndustri_tdg') ?>

    <?php // echo $form->field($model, 'NPWP_tdg') ?>

    <?php // echo $form->field($model, 'namaJalan_tdg') ?>

    <?php // echo $form->field($model, 'desaKelurahan_tdg') ?>

    <?php // echo $form->field($model, 'kecamatan_tdg') ?>

    <?php // echo $form->field($model, 'luasGudang_tdg') ?>

    <?php // echo $form->field($model, 'tanggalSurat_tdg') ?>

    <?php // echo $form->field($model, 'keterangan_tdg') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
