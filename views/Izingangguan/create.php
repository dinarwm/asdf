<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izingangguan */

$this->title = 'Create Izingangguan';
$this->params['breadcrumbs'][] = ['label' => 'Izingangguans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izingangguan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
