<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinreklame */

$this->title = 'Create Izinreklame';
$this->params['breadcrumbs'][] = ['label' => 'Izinreklames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinreklame-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
