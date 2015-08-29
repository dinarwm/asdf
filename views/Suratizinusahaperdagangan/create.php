<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Suratizinusahaperdagangan */

$this->title = 'Create Suratizinusahaperdagangan';
$this->params['breadcrumbs'][] = ['label' => 'Suratizinusahaperdagangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suratizinusahaperdagangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
