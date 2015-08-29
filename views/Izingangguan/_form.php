<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izingangguan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izingangguan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPengusaha_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPengusaha_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPerusahaan_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPerusahaan_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPermohonan_ig')->textInput() ?>

    <?= $form->field($model, 'tglBeritaAcara_ig')->textInput() ?>

    <?= $form->field($model, 'atasTanahMilik_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statusTanah_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'luasTanah_ig')->textInput() ?>

    <?= $form->field($model, 'luasBangunan_ig')->textInput() ?>

    <?= $form->field($model, 'lokasiTanah_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasUtara_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasTimur_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasSelatan_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasBarat_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDitetapkan_ig')->textInput() ?>

    <?= $form->field($model, 'keterangan_ig')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
