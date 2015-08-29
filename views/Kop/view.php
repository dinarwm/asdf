<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kop */

$this->title = $model->id_kop;
$this->params['breadcrumbs'][] = ['label' => 'Kops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kop-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kop], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kop], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kop',
            'alamat',
            'telp',
            'nama_camat',
            'jabatan',
            'nip',
            'id_daerah',
        ],
    ]) ?>

</div>
