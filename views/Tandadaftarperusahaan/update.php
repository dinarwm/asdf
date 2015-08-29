<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tandadaftarperusahaan */

$this->title = 'Update Tandadaftarperusahaan: ' . ' ' . $model->id_tdp;
$this->params['breadcrumbs'][] = ['label' => 'Tandadaftarperusahaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tdp, 'url' => ['view', 'id' => $model->id_tdp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tandadaftarperusahaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
