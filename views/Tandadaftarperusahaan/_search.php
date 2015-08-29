<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TandadaftarperusahaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tandadaftarperusahaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tdp') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_tdp') ?>

    <?= $form->field($model, 'bentukPerusahaan_tdp') ?>

    <?= $form->field($model, 'namaPerusahaan_tdp') ?>

    <?php // echo $form->field($model, 'namaPenanggungJawab_tdp') ?>

    <?php // echo $form->field($model, 'jabatan_tdp') ?>

    <?php // echo $form->field($model, 'alamatPerusahaan_tdp') ?>

    <?php // echo $form->field($model, 'noTelpFax_tdp') ?>

    <?php // echo $form->field($model, 'NPWP_tdp') ?>

    <?php // echo $form->field($model, 'statusKantor_tdp') ?>

    <?php // echo $form->field($model, 'statusPendaftaran_tdp') ?>

    <?php // echo $form->field($model, 'pembarauan_tdp') ?>

    <?php // echo $form->field($model, 'KBLI_tdp') ?>

    <?php // echo $form->field($model, 'nomorKBLI_tdp') ?>

    <?php // echo $form->field($model, 'tglDikeluarkan_tdp') ?>

    <?php // echo $form->field($model, 'berlaku_tdp') ?>

    <?php // echo $form->field($model, 'keterangan_tdp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
