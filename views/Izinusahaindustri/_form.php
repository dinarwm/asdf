<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinusahaindustri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinusahaindustri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipePerusahaan_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPerusahaan_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPermohonan_iui')->textInput() ?>

    <?= $form->field($model, 'NPWP_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KBLI_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPerusahaan_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPabrik_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglSuratPernyataan_iui')->textInput() ?>

    <?= $form->field($model, 'nomorLampiran_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglLampiran_iui')->textInput() ?>

    <?= $form->field($model, 'namaPenanggungJawab_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPenanggungJawab_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPemilikPerusahaan_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'komoditiIndustri_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kapasitasTerpasang_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'totalInvestasi_iui')->textInput() ?>

    <?= $form->field($model, 'terbilang_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indonesia_iui')->textInput() ?>

    <?= $form->field($model, 'asing_iui')->textInput() ?>

    <?= $form->field($model, 'luasGudang_iui')->textInput() ?>

    <?= $form->field($model, 'no_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'komoditi_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kapasitas_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'satuan_iui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDitetapkan_iui')->textInput() ?>

    <?= $form->field($model, 'keterangan_iui')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
