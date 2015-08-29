<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpendiriantempatibadah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinpendiriantempatibadah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noPermohonan_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perihalPermohonan_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglBeritaAcara_ipti')->textInput() ?>

    <?= $form->field($model, 'tglRekomendasi_ipti')->textInput() ?>

    <?= $form->field($model, 'noRekomendasi_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatBangunan_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'atasTanahMilik_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'persilNo_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'luasTanah_ipti')->textInput() ?>

    <?= $form->field($model, 'luasBangunan_ipti')->textInput() ?>

    <?= $form->field($model, 'desa_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasUtara_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasTimur_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasSelatan_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batasBarat_ipti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDitetapkan_ipti')->textInput() ?>

    <?= $form->field($model, 'tembusan_ipti')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keterangan_ipti')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
