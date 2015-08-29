<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinmenutupjalan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinmenutupjalan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_imj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDikeluarkan_imj')->textInput() ?>

    <?= $form->field($model, 'tglPengajuan_imj')->textInput() ?>

    <?= $form->field($model, 'kepada_imj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_imj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaAcara_imj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jalanDitutup_imj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penutupanJalanMaksimal_imj')->textInput() ?>

    <?= $form->field($model, 'tglAcara_imj')->textInput() ?>

    <?= $form->field($model, 'JamAcara_imj')->textInput() ?>

    <?= $form->field($model, 'tglAcaraSelesai_imj')->textInput() ?>

    <?= $form->field($model, 'jamAcaraSelesai_imj')->textInput() ?>

    <?= $form->field($model, 'tembusan_imj')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keterangan_imj')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
