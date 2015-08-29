<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinpeminjamanalunalun */

$this->title = 'Update Izinpeminjamanalunalun: ' . ' ' . $model->id_ipaa;
$this->params['breadcrumbs'][] = ['label' => 'Izinpeminjamanalunaluns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ipaa, 'url' => ['view', 'id' => $model->id_ipaa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinpeminjamanalunalun-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
