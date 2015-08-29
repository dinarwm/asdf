<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpeminjamanalunalun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinpeminjamanalunalun-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_ipaa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ipaa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_ipaa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPermohonan_ipaa')->textInput() ?>

    <?= $form->field($model, 'noPermohonan_ipaa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perihalPermohonan_ipaa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaAcara_ipaa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglAwalAcara_ipaa')->textInput() ?>

    <?= $form->field($model, 'tglAkhirAcara_ipaa')->textInput() ?>

    <?= $form->field($model, 'jamAcara_ipaa')->textInput() ?>

    <?= $form->field($model, 'tglDitetapkan_ipaa')->textInput() ?>

    <?= $form->field($model, 'keterangan_ipaa')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
