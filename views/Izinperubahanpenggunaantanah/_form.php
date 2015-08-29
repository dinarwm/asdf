<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinperubahanpenggunaantanah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinperubahanpenggunaantanah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_ippt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPemohon_ippt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'atasNama_ippt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_ippt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPermohonan_ippt')->textInput() ?>

    <?= $form->field($model, 'nomorBeritaAcara_ippt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglBeritaAcara_ippt')->textInput() ?>

    <?= $form->field($model, 'nomorPertimbanganTeknis_ippt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPertimbanganteknis_ippt')->textInput() ?>

    <?= $form->field($model, 'letakTanah_ippt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'luasTanah_ippt')->textInput() ?>

    <?= $form->field($model, 'peruntukanPenggunaanTanah_ippt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasUtara_ippt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasTimur_ippt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasSelatan_ippt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasBarat_ippt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDikeluarkan_ippt')->textInput() ?>

    <?= $form->field($model, 'keterangan_ippt')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
