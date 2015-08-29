<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinusahapertambangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinusahapertambangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_iup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPemohon_iup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPemohon_iup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPermohonan_iup')->textInput() ?>

    <?= $form->field($model, 'tglPeninjauan_iup')->textInput() ?>

    <?= $form->field($model, 'namaUsaha_iup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'komoditas_iup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desaKel_iup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan_iup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kapasitas_iup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jangkaWaktu_iup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'produksi_iup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDikeluarkan_iup')->textInput() ?>

    <?= $form->field($model, 'keterangan_iup')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
