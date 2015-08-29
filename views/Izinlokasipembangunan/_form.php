<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinlokasipembangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinlokasipembangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nomor_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaLokasi_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPemohon_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'atasNama_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPermohonan_ilp')->textInput() ?>

    <?= $form->field($model, 'alamat_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desaKel_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglBeritaAcara_ilp')->textInput() ?>

    <?= $form->field($model, 'nomorBeritaAcara_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPerusahaan_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'letakTanah_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'luasTanah_ilp')->textInput() ?>

    <?= $form->field($model, 'buktiPemilikanTanah_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasUtara_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasTimur_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasSelatan_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasBarat_ilp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDikeluarkan_ilp')->textInput() ?>

    <?= $form->field($model, 'tembusan_ilp')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keterangan_ilp')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
