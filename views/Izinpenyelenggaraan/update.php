<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpenyelenggaraan */

$this->title = 'Update Izinpenyelenggaraan: ' . ' ' . $model->id_ip;
$this->params['breadcrumbs'][] = ['label' => 'Izinpenyelenggaraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ip, 'url' => ['view', 'id' => $model->id_ip]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinpenyelenggaraan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
