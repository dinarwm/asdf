<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinpenggilinganpadi */

$this->title = 'Create Izinpenggilinganpadi';
$this->params['breadcrumbs'][] = ['label' => 'Izinpenggilinganpadis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpenggilinganpadi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
