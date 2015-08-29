<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinusahatokomodern */

$this->title = 'Update Izinusahatokomodern: ' . ' ' . $model->id_iutp;
$this->params['breadcrumbs'][] = ['label' => 'Izinusahatokomoderns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_iutp, 'url' => ['view', 'id' => $model->id_iutp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinusahatokomodern-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
