<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tandadaftargudang */

$this->title = 'Update Tandadaftargudang: ' . ' ' . $model->id_tdg;
$this->params['breadcrumbs'][] = ['label' => 'Tandadaftargudangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tdg, 'url' => ['view', 'id' => $model->id_tdg]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tandadaftargudang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
