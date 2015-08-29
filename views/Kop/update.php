<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kop */

$this->title = 'Update Kop: ' . ' ' . $model->id_kop;
$this->params['breadcrumbs'][] = ['label' => 'Kops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kop, 'url' => ['view', 'id' => $model->id_kop]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
