<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinusahatokomodernSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinusahatokomodern-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_iutp') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_iutp') ?>

    <?= $form->field($model, 'nama_iutp') ?>

    <?= $form->field($model, 'alamat_iutp') ?>

    <?php // echo $form->field($model, 'tglPermohonan_iutp') ?>

    <?php // echo $form->field($model, 'nomorPermohonan_iutp') ?>

    <?php // echo $form->field($model, 'noTelepon_iutp') ?>

    <?php // echo $form->field($model, 'namaPerusahaan_iutp') ?>

    <?php // echo $form->field($model, 'jenisUsaha_iutp') ?>

    <?php // echo $form->field($model, 'lokasiUsaha_iutp') ?>

    <?php // echo $form->field($model, 'tglDitetapkan_iutp') ?>

    <?php // echo $form->field($model, 'keterangan_iutp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
