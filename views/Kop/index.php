<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KopSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kops';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kop-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kop', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kop',
            'alamat',
            'telp',
            'nama_camat',
            'jabatan',
            // 'nip',
            // 'id_daerah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
