<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinmasukkota */

$this->title = 'Create Izinmasukkota';
$this->params['breadcrumbs'][] = ['label' => 'Izinmasukkotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinmasukkota-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
