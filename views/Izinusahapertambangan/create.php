<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinusahapertambangan */

$this->title = 'Create Izinusahapertambangan';
$this->params['breadcrumbs'][] = ['label' => 'Izinusahapertambangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinusahapertambangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
