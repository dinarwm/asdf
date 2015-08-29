<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kop */

$this->title = 'Create Kop';
$this->params['breadcrumbs'][] = ['label' => 'Kops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kop-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
