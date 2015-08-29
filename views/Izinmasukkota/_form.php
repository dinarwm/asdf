<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinmasukkota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinmasukkota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akun')->textInput() ?>

    <?= $form->field($model, 'nomor_imkbkab')->textInput() ?>

    <?= $form->field($model, 'diberikanKepada_imkbkab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_imkbkab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_imkbkab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nopol_imkbkab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenisMerk_imkbkab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomorRangka_imkbkab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomorMesin_imkbkab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'untuk_imkbkab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'syaratSyarat_imkbkab')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'awalIzinBerlaku_imkbkab')->textInput() ?>

    <?= $form->field($model, 'akhirIzinBerlaku_imkbkab')->textInput() ?>

    <?= $form->field($model, 'tglPerizinan_imkbkab')->textInput() ?>

    <?= $form->field($model, 'keterangan_imkbkab')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
