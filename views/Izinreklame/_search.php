<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinreklameSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinreklame-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ir') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomorSuratIzin_ir') ?>

    <?= $form->field($model, 'namaPemohon_ir') ?>

    <?= $form->field($model, 'tanggalPermohonan_ir') ?>

    <?php // echo $form->field($model, 'alamat_ir') ?>

    <?php // echo $form->field($model, 'macamReklame_ir') ?>

    <?php // echo $form->field($model, 'bunyiReklame_ir') ?>

    <?php // echo $form->field($model, 'jumlahReklame_ir') ?>

    <?php // echo $form->field($model, 'ukuranReklame_ir') ?>

    <?php // echo $form->field($model, 'tempatPemasangan_ir') ?>

    <?php // echo $form->field($model, 'lamaPemasangan_ir') ?>

    <?php // echo $form->field($model, 'tglMulaiPemasangan_ir') ?>

    <?php // echo $form->field($model, 'tglAkhirPemasangan_ir') ?>

    <?php // echo $form->field($model, 'keterangan_ir') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
