<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinusahatokomodern */

$this->title = 'Create Izinusahatokomodern';
$this->params['breadcrumbs'][] = ['label' => 'Izinusahatokomoderns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinusahatokomodern-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
