<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DaerahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daerahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daerah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Daerah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_daerah',
            'nama_daerah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
