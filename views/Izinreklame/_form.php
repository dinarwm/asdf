<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinreklame */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinreklame-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomorSuratIzin_ir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPemohon_ir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalPermohonan_ir')->textInput() ?>

    <?= $form->field($model, 'alamat_ir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'macamReklame_ir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bunyiReklame_ir')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jumlahReklame_ir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ukuranReklame_ir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempatPemasangan_ir')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lamaPemasangan_ir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglMulaiPemasangan_ir')->textInput() ?>

    <?= $form->field($model, 'tglAkhirPemasangan_ir')->textInput() ?>

    <?= $form->field($model, 'keterangan_ir')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
