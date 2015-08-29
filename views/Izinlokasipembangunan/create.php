<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinlokasipembangunan */

$this->title = 'Create Izinlokasipembangunan';
$this->params['breadcrumbs'][] = ['label' => 'Izinlokasipembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinlokasipembangunan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
