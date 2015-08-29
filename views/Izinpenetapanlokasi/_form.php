<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpenetapanlokasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinpenetapanlokasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaLokasi_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPemohon_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'atasNama_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomorPermohonan_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPermohonan_ipl')->textInput() ?>

    <?= $form->field($model, 'perihalPermohonan_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPenetapan_ipl')->textInput() ?>

    <?= $form->field($model, 'nomorPenetapan_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglKoordinasi_ipl')->textInput() ?>

    <?= $form->field($model, 'desaKel_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasUtara_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasTimur_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasSelatan_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasBarat_ipl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDikeluarkan_ipl')->textInput() ?>

    <?= $form->field($model, 'tembusan_ipl')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keterangan_ipl')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
