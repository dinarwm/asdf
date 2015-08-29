<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinpengumpulandana */

$this->title = 'Create Izinpengumpulandana';
$this->params['breadcrumbs'][] = ['label' => 'Izinpengumpulandanas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpengumpulandana-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
