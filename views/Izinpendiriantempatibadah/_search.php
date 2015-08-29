<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinpendiriantempatibadahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinpendiriantempatibadah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ipti') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_ipti') ?>

    <?= $form->field($model, 'nama_ipti') ?>

    <?= $form->field($model, 'alamat_ipti') ?>

    <?php // echo $form->field($model, 'noPermohonan_ipti') ?>

    <?php // echo $form->field($model, 'perihalPermohonan_ipti') ?>

    <?php // echo $form->field($model, 'tglBeritaAcara_ipti') ?>

    <?php // echo $form->field($model, 'tglRekomendasi_ipti') ?>

    <?php // echo $form->field($model, 'noRekomendasi_ipti') ?>

    <?php // echo $form->field($model, 'alamatBangunan_ipti') ?>

    <?php // echo $form->field($model, 'atasTanahMilik_ipti') ?>

    <?php // echo $form->field($model, 'persilNo_ipti') ?>

    <?php // echo $form->field($model, 'luasTanah_ipti') ?>

    <?php // echo $form->field($model, 'luasBangunan_ipti') ?>

    <?php // echo $form->field($model, 'desa_ipti') ?>

    <?php // echo $form->field($model, 'kecamatan_ipti') ?>

    <?php // echo $form->field($model, 'batasUtara_ipti') ?>

    <?php // echo $form->field($model, 'batasTimur_ipti') ?>

    <?php // echo $form->field($model, 'batasSelatan_ipti') ?>

    <?php // echo $form->field($model, 'batasBarat_ipti') ?>

    <?php // echo $form->field($model, 'tglDitetapkan_ipti') ?>

    <?php // echo $form->field($model, 'tembusan_ipti') ?>

    <?php // echo $form->field($model, 'keterangan_ipti') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
