<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlamatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alamats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alamat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Alamat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'alamat',
            'kota',
            'kecamatan',
            'kelurahan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
