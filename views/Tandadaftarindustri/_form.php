<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tandadaftarindustri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tandadaftarindustri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPerusahaan_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPerusahaan_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomorTelepon_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NPWP_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIPIK_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPemilik_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPemilik_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KBLI_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KKI_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desaKelurahanPabrik_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatanPabrik_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mesinUtama_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mesinPembantu_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tenagaPenggerak_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilaiInvestasi_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terbilang_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kapasitasProduksiTerpasang_tdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDitetapkan_tdi')->textInput() ?>

    <?= $form->field($model, 'keterangan_tdi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
