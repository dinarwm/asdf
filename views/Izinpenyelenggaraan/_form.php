<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpenyelenggaraan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinpenyelenggaraan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPermohonan_ip')->textInput() ?>

    <?= $form->field($model, 'noPermohonan_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaAcara_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglMulaiAcara_ip')->textInput() ?>

    <?= $form->field($model, 'tglAkhirAcara_ip')->textInput() ?>

    <?= $form->field($model, 'jamAcara_ip')->textInput() ?>

    <?= $form->field($model, 'tempatAcara_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HTM_ip')->textInput() ?>

    <?= $form->field($model, 'tembusan_ip')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keterangan_ip')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
