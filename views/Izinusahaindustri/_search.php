<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinusahaindustriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinusahaindustri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_iui') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_iui') ?>

    <?= $form->field($model, 'tipePerusahaan_iui') ?>

    <?= $form->field($model, 'namaPerusahaan_iui') ?>

    <?php // echo $form->field($model, 'tglPermohonan_iui') ?>

    <?php // echo $form->field($model, 'NPWP_iui') ?>

    <?php // echo $form->field($model, 'KBLI_iui') ?>

    <?php // echo $form->field($model, 'alamatPerusahaan_iui') ?>

    <?php // echo $form->field($model, 'alamatPabrik_iui') ?>

    <?php // echo $form->field($model, 'tglSuratPernyataan_iui') ?>

    <?php // echo $form->field($model, 'nomorLampiran_iui') ?>

    <?php // echo $form->field($model, 'tglLampiran_iui') ?>

    <?php // echo $form->field($model, 'namaPenanggungJawab_iui') ?>

    <?php // echo $form->field($model, 'alamatPenanggungJawab_iui') ?>

    <?php // echo $form->field($model, 'namaPemilikPerusahaan_iui') ?>

    <?php // echo $form->field($model, 'komoditiIndustri_iui') ?>

    <?php // echo $form->field($model, 'kapasitasTerpasang_iui') ?>

    <?php // echo $form->field($model, 'totalInvestasi_iui') ?>

    <?php // echo $form->field($model, 'terbilang_iui') ?>

    <?php // echo $form->field($model, 'indonesia_iui') ?>

    <?php // echo $form->field($model, 'asing_iui') ?>

    <?php // echo $form->field($model, 'luasGudang_iui') ?>

    <?php // echo $form->field($model, 'no_iui') ?>

    <?php // echo $form->field($model, 'komoditi_iui') ?>

    <?php // echo $form->field($model, 'kapasitas_iui') ?>

    <?php // echo $form->field($model, 'satuan_iui') ?>

    <?php // echo $form->field($model, 'tglDitetapkan_iui') ?>

    <?php // echo $form->field($model, 'keterangan_iui') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
