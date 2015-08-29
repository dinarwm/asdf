<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinmasukkotaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinmasukkota-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_imkbkab') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_imkbkab') ?>

    <?= $form->field($model, 'diberikanKepada_imkbkab') ?>

    <?= $form->field($model, 'nama_imkbkab') ?>

    <?php // echo $form->field($model, 'alamat_imkbkab') ?>

    <?php // echo $form->field($model, 'nopol_imkbkab') ?>

    <?php // echo $form->field($model, 'jenisMerk_imkbkab') ?>

    <?php // echo $form->field($model, 'nomorRangka_imkbkab') ?>

    <?php // echo $form->field($model, 'nomorMesin_imkbkab') ?>

    <?php // echo $form->field($model, 'untuk_imkbkab') ?>

    <?php // echo $form->field($model, 'syaratSyarat_imkbkab') ?>

    <?php // echo $form->field($model, 'awalIzinBerlaku_imkbkab') ?>

    <?php // echo $form->field($model, 'akhirIzinBerlaku_imkbkab') ?>

    <?php // echo $form->field($model, 'tglPerizinan_imkbkab') ?>

    <?php // echo $form->field($model, 'keterangan_imkbkab') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
