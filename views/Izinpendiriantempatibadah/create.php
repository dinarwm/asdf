<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinpendiriantempatibadah */

$this->title = 'Create Izinpendiriantempatibadah';
$this->params['breadcrumbs'][] = ['label' => 'Izinpendiriantempatibadahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpendiriantempatibadah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
