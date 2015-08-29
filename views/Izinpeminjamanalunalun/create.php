<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinpeminjamanalunalun */

$this->title = 'Create Izinpeminjamanalunalun';
$this->params['breadcrumbs'][] = ['label' => 'Izinpeminjamanalunaluns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinpeminjamanalunalun-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
