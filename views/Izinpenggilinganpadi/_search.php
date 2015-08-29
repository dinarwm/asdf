<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinpenggilinganpadiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinpenggilinganpadi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ipdhdpb') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_ipdhdpb') ?>

    <?= $form->field($model, 'namaPengusaha_ipdhdpb') ?>

    <?= $form->field($model, 'alamatPengusaha_ipdhdpb') ?>

    <?php // echo $form->field($model, 'desaPengusaha_ipdhdpb') ?>

    <?php // echo $form->field($model, 'kecamatanPengusaha_ipdhdpb') ?>

    <?php // echo $form->field($model, 'tglPermohonan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'namaPerusahaan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'alamatPerusahaan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'desaPerusahaan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'kecamatanPerusahaan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'nomorKode_ipdhdpb') ?>

    <?php // echo $form->field($model, 'kapasitasPotensial_ipdhdpb') ?>

    <?php // echo $form->field($model, 'tglLampiran_ipdhdpb') ?>

    <?php // echo $form->field($model, 'noTenagaPenggerak_ipdhdpb') ?>

    <?php // echo $form->field($model, 'jenisTenagaPenggerak_ipdhdpb') ?>

    <?php // echo $form->field($model, 'rpmTenagaPenggerak_ipdhdpb') ?>

    <?php // echo $form->field($model, 'pkTenagaPenggerak_ipdhdpb') ?>

    <?php // echo $form->field($model, 'merkTenagaPenggerak_ipdhdpb') ?>

    <?php // echo $form->field($model, 'jumlahTenagaPenggerak_ipdhdpb') ?>

    <?php // echo $form->field($model, 'noPeralatan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'namaJenisPeralatan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'typePeralatan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'kapasitasPeralatan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'merkPeralatan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'jumlahPeralatan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'keteranganMesinPeralatan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'tglDitetapkan_ipdhdpb') ?>

    <?php // echo $form->field($model, 'keterangan_ipdhdpb') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
