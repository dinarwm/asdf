<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinlokasipembangunan */

$this->title = 'Update Izinlokasipembangunan: ' . ' ' . $model->id_ilp;
$this->params['breadcrumbs'][] = ['label' => 'Izinlokasipembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ilp, 'url' => ['view', 'id' => $model->id_ilp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinlokasipembangunan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
