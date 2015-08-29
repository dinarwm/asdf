<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinusahaindustri */

$this->title = 'Create Izinusahaindustri';
$this->params['breadcrumbs'][] = ['label' => 'Izinusahaindustris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinusahaindustri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
