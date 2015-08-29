<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tandadaftarperusahaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tandadaftarperusahaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bentukPerusahaan_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPerusahaan_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPenanggungJawab_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPerusahaan_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noTelpFax_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NPWP_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statusKantor_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statusPendaftaran_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pembarauan_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KBLI_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomorKBLI_tdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDikeluarkan_tdp')->textInput() ?>

    <?= $form->field($model, 'berlaku_tdp')->textInput() ?>

    <?= $form->field($model, 'keterangan_tdp')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
