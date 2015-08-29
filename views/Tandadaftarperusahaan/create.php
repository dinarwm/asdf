<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tandadaftarperusahaan */

$this->title = 'Create Tandadaftarperusahaan';
$this->params['breadcrumbs'][] = ['label' => 'Tandadaftarperusahaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tandadaftarperusahaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
