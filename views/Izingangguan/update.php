<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izingangguan */

$this->title = 'Update Izingangguan: ' . ' ' . $model->id_ig;
$this->params['breadcrumbs'][] = ['label' => 'Izingangguans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ig, 'url' => ['view', 'id' => $model->id_ig]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izingangguan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
