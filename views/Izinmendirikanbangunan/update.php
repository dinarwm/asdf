<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinmendirikanbangunan */

$this->title = 'Update Izinmendirikanbangunan: ' . ' ' . $model->id_imb;
$this->params['breadcrumbs'][] = ['label' => 'Izinmendirikanbangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_imb, 'url' => ['view', 'id' => $model->id_imb]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinmendirikanbangunan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
