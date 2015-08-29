<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinpenyelenggaraanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinpenyelenggaraan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ip') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_ip') ?>

    <?= $form->field($model, 'nama_ip') ?>

    <?= $form->field($model, 'alamat_ip') ?>

    <?php // echo $form->field($model, 'tglPermohonan_ip') ?>

    <?php // echo $form->field($model, 'noPermohonan_ip') ?>

    <?php // echo $form->field($model, 'namaAcara_ip') ?>

    <?php // echo $form->field($model, 'tglMulaiAcara_ip') ?>

    <?php // echo $form->field($model, 'tglAkhirAcara_ip') ?>

    <?php // echo $form->field($model, 'jamAcara_ip') ?>

    <?php // echo $form->field($model, 'tempatAcara_ip') ?>

    <?php // echo $form->field($model, 'HTM_ip') ?>

    <?php // echo $form->field($model, 'tembusan_ip') ?>

    <?php // echo $form->field($model, 'keterangan_ip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
