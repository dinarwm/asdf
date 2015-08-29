<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinmendirikanbangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinmendirikanbangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomorPermohonanFormulir_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPemohon_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempatLahir_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglLahir_imb')->textInput() ?>

    <?= $form->field($model, 'pekerjaan_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasiBangunan_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaBangunan_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenisBangunan_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kondisiBangunan_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'luasBangunan_imb')->textInput() ?>

    <?= $form->field($model, 'indeksTerintegrasi_imb')->textInput() ?>

    <?= $form->field($model, 'ibgPermanen_imb')->textInput() ?>

    <?= $form->field($model, 'ibgTingkat_imb')->textInput() ?>

    <?= $form->field($model, 'ibgKepemilikan_imb')->textInput() ?>

    <?= $form->field($model, 'hsbg_imb')->textInput() ?>

    <?= $form->field($model, 'indeksPengaliWilayah_imb')->textInput() ?>

    <?= $form->field($model, 'indeksPengaliJalan_imb')->textInput() ?>

    <?= $form->field($model, 'fungsiBangunan_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statusTanah_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'luasTanah_imb')->textInput() ?>

    <?= $form->field($model, 'tinggiBangunan_imb')->textInput() ?>

    <?= $form->field($model, 'tanahMilik_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rooiJalan_imb')->textInput() ?>

    <?= $form->field($model, 'batasUtara_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasTimur_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasSelatan_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasBarat_imb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPermohonanFormulir_imb')->textInput() ?>

    <?= $form->field($model, 'keterangan_imb')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
