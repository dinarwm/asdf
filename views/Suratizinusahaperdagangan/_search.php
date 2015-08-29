<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuratizinusahaperdaganganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suratizinusahaperdagangan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_siup') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_siup') ?>

    <?= $form->field($model, 'bentukPerusahaan_siup') ?>

    <?= $form->field($model, 'namaPerusahaan_siup') ?>

    <?php // echo $form->field($model, 'namaPenanggungJawab_siup') ?>

    <?php // echo $form->field($model, 'jabatan_siup') ?>

    <?php // echo $form->field($model, 'alamatPerusahaan_siup') ?>

    <?php // echo $form->field($model, 'noTelpFax_siup') ?>

    <?php // echo $form->field($model, 'modalKekayaanBersih_siup') ?>

    <?php // echo $form->field($model, 'NPWP_siup') ?>

    <?php // echo $form->field($model, 'kelembagaan_siup') ?>

    <?php // echo $form->field($model, 'KBLI_siup') ?>

    <?php // echo $form->field($model, 'barangJasa_siup') ?>

    <?php // echo $form->field($model, 'tglDikeluarkan_siup') ?>

    <?php // echo $form->field($model, 'berlaku_siup') ?>

    <?php // echo $form->field($model, 'keterangan_siup') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
