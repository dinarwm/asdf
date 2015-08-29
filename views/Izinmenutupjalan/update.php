<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinmenutupjalan */

$this->title = 'Update Izinmenutupjalan: ' . ' ' . $model->id_imj;
$this->params['breadcrumbs'][] = ['label' => 'Izinmenutupjalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_imj, 'url' => ['view', 'id' => $model->id_imj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinmenutupjalan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
