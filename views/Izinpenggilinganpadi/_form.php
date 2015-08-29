<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpenggilinganpadi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinpenggilinganpadi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPengusaha_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPengusaha_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desaPengusaha_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatanPengusaha_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPermohonan_ipdhdpb')->textInput() ?>

    <?= $form->field($model, 'namaPerusahaan_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatPerusahaan_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desaPerusahaan_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatanPerusahaan_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomorKode_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kapasitasPotensial_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglLampiran_ipdhdpb')->textInput() ?>

    <?= $form->field($model, 'noTenagaPenggerak_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenisTenagaPenggerak_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpmTenagaPenggerak_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pkTenagaPenggerak_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'merkTenagaPenggerak_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlahTenagaPenggerak_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noPeralatan_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaJenisPeralatan_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'typePeralatan_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kapasitasPeralatan_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'merkPeralatan_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlahPeralatan_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keteranganMesinPeralatan_ipdhdpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDitetapkan_ipdhdpb')->textInput() ?>

    <?= $form->field($model, 'keterangan_ipdhdpb')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
