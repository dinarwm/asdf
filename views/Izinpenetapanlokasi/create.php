<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinpenetapanlokasi */

$this->title = 'Create Izinpenetapanlokasi';
$this->params['breadcrumbs'][] = ['label' => 'Izinpenetapanlokasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpenetapanlokasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
