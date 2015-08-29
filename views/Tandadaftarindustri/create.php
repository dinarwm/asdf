<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tandadaftarindustri */

$this->title = 'Create Tandadaftarindustri';
$this->params['breadcrumbs'][] = ['label' => 'Tandadaftarindustris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tandadaftarindustri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
