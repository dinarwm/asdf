<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinusahapertambanganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinusahapertambangan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_iup') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_iup') ?>

    <?= $form->field($model, 'namaPemohon_iup') ?>

    <?= $form->field($model, 'alamatPemohon_iup') ?>

    <?php // echo $form->field($model, 'tglPermohonan_iup') ?>

    <?php // echo $form->field($model, 'tglPeninjauan_iup') ?>

    <?php // echo $form->field($model, 'namaUsaha_iup') ?>

    <?php // echo $form->field($model, 'komoditas_iup') ?>

    <?php // echo $form->field($model, 'desaKel_iup') ?>

    <?php // echo $form->field($model, 'kecamatan_iup') ?>

    <?php // echo $form->field($model, 'kapasitas_iup') ?>

    <?php // echo $form->field($model, 'jangkaWaktu_iup') ?>

    <?php // echo $form->field($model, 'produksi_iup') ?>

    <?php // echo $form->field($model, 'tglDikeluarkan_iup') ?>

    <?php // echo $form->field($model, 'keterangan_iup') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
