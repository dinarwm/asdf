<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzingangguanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izingangguan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ig') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_ig') ?>

    <?= $form->field($model, 'namaPengusaha_ig') ?>

    <?= $form->field($model, 'alamatPengusaha_ig') ?>

    <?php // echo $form->field($model, 'namaPerusahaan_ig') ?>

    <?php // echo $form->field($model, 'alamatPerusahaan_ig') ?>

    <?php // echo $form->field($model, 'tglPermohonan_ig') ?>

    <?php // echo $form->field($model, 'tglBeritaAcara_ig') ?>

    <?php // echo $form->field($model, 'atasTanahMilik_ig') ?>

    <?php // echo $form->field($model, 'statusTanah_ig') ?>

    <?php // echo $form->field($model, 'luasTanah_ig') ?>

    <?php // echo $form->field($model, 'luasBangunan_ig') ?>

    <?php // echo $form->field($model, 'lokasiTanah_ig') ?>

    <?php // echo $form->field($model, 'batasUtara_ig') ?>

    <?php // echo $form->field($model, 'batasTimur_ig') ?>

    <?php // echo $form->field($model, 'batasSelatan_ig') ?>

    <?php // echo $form->field($model, 'batasBarat_ig') ?>

    <?php // echo $form->field($model, 'tglDitetapkan_ig') ?>

    <?php // echo $form->field($model, 'keterangan_ig') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
