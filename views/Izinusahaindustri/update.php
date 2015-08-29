<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinusahaindustri */

$this->title = 'Update Izinusahaindustri: ' . ' ' . $model->id_iui;
$this->params['breadcrumbs'][] = ['label' => 'Izinusahaindustris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_iui, 'url' => ['view', 'id' => $model->id_iui]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinusahaindustri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
