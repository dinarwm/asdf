<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinpeminjamanalunalunSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izinpeminjamanalunalun-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ipaa') ?>

    <?= $form->field($model, 'id_akun') ?>

    <?= $form->field($model, 'nomor_ipaa') ?>

    <?= $form->field($model, 'nama_ipaa') ?>

    <?= $form->field($model, 'alamat_ipaa') ?>

    <?php // echo $form->field($model, 'tglPermohonan_ipaa') ?>

    <?php // echo $form->field($model, 'noPermohonan_ipaa') ?>

    <?php // echo $form->field($model, 'perihalPermohonan_ipaa') ?>

    <?php // echo $form->field($model, 'namaAcara_ipaa') ?>

    <?php // echo $form->field($model, 'tglAwalAcara_ipaa') ?>

    <?php // echo $form->field($model, 'tglAkhirAcara_ipaa') ?>

    <?php // echo $form->field($model, 'jamAcara_ipaa') ?>

    <?php // echo $form->field($model, 'tglDitetapkan_ipaa') ?>

    <?php // echo $form->field($model, 'keterangan_ipaa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
