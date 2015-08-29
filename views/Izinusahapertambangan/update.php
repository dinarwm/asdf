<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinusahapertambangan */

$this->title = 'Update Izinusahapertambangan: ' . ' ' . $model->id_iup;
$this->params['breadcrumbs'][] = ['label' => 'Izinusahapertambangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_iup, 'url' => ['view', 'id' => $model->id_iup]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinusahapertambangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
