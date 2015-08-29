<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpenggilinganpadi */

$this->title = 'Update Izinpenggilinganpadi: ' . ' ' . $model->id_ipdhdpb;
$this->params['breadcrumbs'][] = ['label' => 'Izinpenggilinganpadis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ipdhdpb, 'url' => ['view', 'id' => $model->id_ipdhdpb]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinpenggilinganpadi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
