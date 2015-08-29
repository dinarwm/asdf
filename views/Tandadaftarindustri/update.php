<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tandadaftarindustri */

$this->title = 'Update Tandadaftarindustri: ' . ' ' . $model->id_tdi;
$this->params['breadcrumbs'][] = ['label' => 'Tandadaftarindustris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tdi, 'url' => ['view', 'id' => $model->id_tdi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tandadaftarindustri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
