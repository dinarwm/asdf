<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpengumpulandana */

$this->title = 'Update Izinpengumpulandana: ' . ' ' . $model->id_ipd;
$this->params['breadcrumbs'][] = ['label' => 'Izinpengumpulandanas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ipd, 'url' => ['view', 'id' => $model->id_ipd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinpengumpulandana-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
