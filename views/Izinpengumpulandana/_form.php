<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpengumpulandana */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinpengumpulandana-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomorSK_ipd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaPemohon_ipd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_ipd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPermohonan_ipd')->textInput() ?>

    <?= $form->field($model, 'perihalPermohonan_ipd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caraPengumpulanDana_ipd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rincian_ipd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglMulai_ipd')->textInput() ?>

    <?= $form->field($model, 'tglSelesai_ipd')->textInput() ?>

    <?= $form->field($model, 'tglDitetapkan_ipd')->textInput() ?>

    <?= $form->field($model, 'menimbangPoinA_ipd')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tembusan_ipd')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keterangan_ipd')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
