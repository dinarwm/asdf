<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KopSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kop-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kop') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'telp') ?>

    <?= $form->field($model, 'nama_camat') ?>

    <?= $form->field($model, 'jabatan') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'id_daerah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
