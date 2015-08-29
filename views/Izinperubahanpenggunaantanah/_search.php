<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinperubahanpenggunaantanahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinperubahanpenggunaantanah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ippt') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_ippt') ?>

    <?= $form->field($model, 'namaPemohon_ippt') ?>

    <?= $form->field($model, 'atasNama_ippt') ?>

    <?php // echo $form->field($model, 'alamat_ippt') ?>

    <?php // echo $form->field($model, 'tglPermohonan_ippt') ?>

    <?php // echo $form->field($model, 'nomorBeritaAcara_ippt') ?>

    <?php // echo $form->field($model, 'tglBeritaAcara_ippt') ?>

    <?php // echo $form->field($model, 'nomorPertimbanganTeknis_ippt') ?>

    <?php // echo $form->field($model, 'tglPertimbanganteknis_ippt') ?>

    <?php // echo $form->field($model, 'letakTanah_ippt') ?>

    <?php // echo $form->field($model, 'luasTanah_ippt') ?>

    <?php // echo $form->field($model, 'peruntukanPenggunaanTanah_ippt') ?>

    <?php // echo $form->field($model, 'batasUtara_ippt') ?>

    <?php // echo $form->field($model, 'batasTimur_ippt') ?>

    <?php // echo $form->field($model, 'batasSelatan_ippt') ?>

    <?php // echo $form->field($model, 'batasBarat_ippt') ?>

    <?php // echo $form->field($model, 'tglDikeluarkan_ippt') ?>

    <?php // echo $form->field($model, 'keterangan_ippt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
