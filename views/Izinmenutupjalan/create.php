<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinmenutupjalan */

$this->title = 'Create Izinmenutupjalan';
$this->params['breadcrumbs'][] = ['label' => 'Izinmenutupjalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinmenutupjalan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
