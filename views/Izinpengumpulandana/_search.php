<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinpengumpulandanaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinpengumpulandana-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ipd') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomorSK_ipd') ?>

    <?= $form->field($model, 'namaPemohon_ipd') ?>

    <?= $form->field($model, 'alamat_ipd') ?>

    <?php // echo $form->field($model, 'tglPermohonan_ipd') ?>

    <?php // echo $form->field($model, 'perihalPermohonan_ipd') ?>

    <?php // echo $form->field($model, 'caraPengumpulanDana_ipd') ?>

    <?php // echo $form->field($model, 'rincian_ipd') ?>

    <?php // echo $form->field($model, 'tglMulai_ipd') ?>

    <?php // echo $form->field($model, 'tglSelesai_ipd') ?>

    <?php // echo $form->field($model, 'tglDitetapkan_ipd') ?>

    <?php // echo $form->field($model, 'menimbangPoinA_ipd') ?>

    <?php // echo $form->field($model, 'tembusan_ipd') ?>

    <?php // echo $form->field($model, 'keterangan_ipd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
