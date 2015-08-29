<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tandadaftargudang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tandadaftargudang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenisPerusahaanPerorangan_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPerusahaan_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AlamatPerusahaanPerorangan_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPemilikPenguasa_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPemilikPenguasa_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomorSiup_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglSiup_tdg')->textInput() ?>

    <?= $form->field($model, 'tempatSiup_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suratIzinUsahaIndustri_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NPWP_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaJalan_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desaKelurahan_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan_tdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'luasGudang_tdg')->textInput() ?>

    <?= $form->field($model, 'tanggalSurat_tdg')->textInput() ?>

    <?= $form->field($model, 'keterangan_tdg')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
