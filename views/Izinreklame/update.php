<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinreklame */

$this->title = 'Update Izinreklame: ' . ' ' . $model->id_ir;
$this->params['breadcrumbs'][] = ['label' => 'Izinreklames', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ir, 'url' => ['view', 'id' => $model->id_ir]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinreklame-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
