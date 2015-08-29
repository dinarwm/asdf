<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinusahatokomodern */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinusahatokomodern-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_iutp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_iutp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_iutp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPermohonan_iutp')->textInput() ?>

    <?= $form->field($model, 'nomorPermohonan_iutp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noTelepon_iutp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPerusahaan_iutp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenisUsaha_iutp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasiUsaha_iutp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDitetapkan_iutp')->textInput() ?>

    <?= $form->field($model, 'keterangan_iutp')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
