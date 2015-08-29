<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinpenyelenggaraan */

$this->title = 'Create Izinpenyelenggaraan';
$this->params['breadcrumbs'][] = ['label' => 'Izinpenyelenggaraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpenyelenggaraan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
