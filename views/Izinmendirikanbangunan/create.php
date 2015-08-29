<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinmendirikanbangunan */

$this->title = 'Create Izinmendirikanbangunan';
$this->params['breadcrumbs'][] = ['label' => 'Izinmendirikanbangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinmendirikanbangunan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
