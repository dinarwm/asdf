<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinperubahanpenggunaantanah */

$this->title = 'Create Izinperubahanpenggunaantanah';
$this->params['breadcrumbs'][] = ['label' => 'Izinperubahanpenggunaantanahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinperubahanpenggunaantanah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
