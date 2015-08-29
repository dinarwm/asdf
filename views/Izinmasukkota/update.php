<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinmasukkota */

$this->title = 'Update Izinmasukkota: ' . ' ' . $model->id_imkbkab;
$this->params['breadcrumbs'][] = ['label' => 'Izinmasukkotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_imkbkab, 'url' => ['view', 'id' => $model->id_imkbkab]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinmasukkota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
