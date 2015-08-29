<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Suratizinusahaperdagangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suratizinusahaperdagangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_siup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bentukPerusahaan_siup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPerusahaan_siup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPenanggungJawab_siup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan_siup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPerusahaan_siup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noTelpFax_siup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modalKekayaanBersih_siup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NPWP_siup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelembagaan_siup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KBLI_siup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'barangJasa_siup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDikeluarkan_siup')->textInput() ?>

    <?= $form->field($model, 'berlaku_siup')->textInput() ?>

    <?= $form->field($model, 'keterangan_siup')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
