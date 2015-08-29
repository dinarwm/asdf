<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpenetapanlokasi */

$this->title = 'Update Izinpenetapanlokasi: ' . ' ' . $model->id_ipl;
$this->params['breadcrumbs'][] = ['label' => 'Izinpenetapanlokasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ipl, 'url' => ['view', 'id' => $model->id_ipl]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinpenetapanlokasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
