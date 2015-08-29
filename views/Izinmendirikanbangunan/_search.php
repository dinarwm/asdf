<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinmendirikanbangunanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinmendirikanbangunan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_imb') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomorPermohonanFormulir_imb') ?>

    <?= $form->field($model, 'namaPemohon_imb') ?>

    <?= $form->field($model, 'tempatLahir_imb') ?>

    <?php // echo $form->field($model, 'tglLahir_imb') ?>

    <?php // echo $form->field($model, 'pekerjaan_imb') ?>

    <?php // echo $form->field($model, 'alamat_imb') ?>

    <?php // echo $form->field($model, 'lokasiBangunan_imb') ?>

    <?php // echo $form->field($model, 'namaBangunan_imb') ?>

    <?php // echo $form->field($model, 'jenisBangunan_imb') ?>

    <?php // echo $form->field($model, 'kondisiBangunan_imb') ?>

    <?php // echo $form->field($model, 'luasBangunan_imb') ?>

    <?php // echo $form->field($model, 'indeksTerintegrasi_imb') ?>

    <?php // echo $form->field($model, 'ibgPermanen_imb') ?>

    <?php // echo $form->field($model, 'ibgTingkat_imb') ?>

    <?php // echo $form->field($model, 'ibgKepemilikan_imb') ?>

    <?php // echo $form->field($model, 'hsbg_imb') ?>

    <?php // echo $form->field($model, 'indeksPengaliWilayah_imb') ?>

    <?php // echo $form->field($model, 'indeksPengaliJalan_imb') ?>

    <?php // echo $form->field($model, 'fungsiBangunan_imb') ?>

    <?php // echo $form->field($model, 'statusTanah_imb') ?>

    <?php // echo $form->field($model, 'luasTanah_imb') ?>

    <?php // echo $form->field($model, 'tinggiBangunan_imb') ?>

    <?php // echo $form->field($model, 'tanahMilik_imb') ?>

    <?php // echo $form->field($model, 'rooiJalan_imb') ?>

    <?php // echo $form->field($model, 'batasUtara_imb') ?>

    <?php // echo $form->field($model, 'batasTimur_imb') ?>

    <?php // echo $form->field($model, 'batasSelatan_imb') ?>

    <?php // echo $form->field($model, 'batasBarat_imb') ?>

    <?php // echo $form->field($model, 'tglPermohonanFormulir_imb') ?>

    <?php // echo $form->field($model, 'keterangan_imb') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
