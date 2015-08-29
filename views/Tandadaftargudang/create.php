<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tandadaftargudang */

$this->title = 'Create Tandadaftargudang';
$this->params['breadcrumbs'][] = ['label' => 'Tandadaftargudangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tandadaftargudang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
