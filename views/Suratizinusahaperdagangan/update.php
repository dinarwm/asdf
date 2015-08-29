<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Suratizinusahaperdagangan */

$this->title = 'Update Suratizinusahaperdagangan: ' . ' ' . $model->id_siup;
$this->params['breadcrumbs'][] = ['label' => 'Suratizinusahaperdagangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_siup, 'url' => ['view', 'id' => $model->id_siup]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suratizinusahaperdagangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
