<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinperubahanpenggunaantanah */

$this->title = 'Update Izinperubahanpenggunaantanah: ' . ' ' . $model->id_ippt;
$this->params['breadcrumbs'][] = ['label' => 'Izinperubahanpenggunaantanahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ippt, 'url' => ['view', 'id' => $model->id_ippt]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinperubahanpenggunaantanah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
