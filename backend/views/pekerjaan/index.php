<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PekerjaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pekerjaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pekerjaan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pekerjaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'pekerjaan',
            'nomor_kantor',
            'lama_bekerja',
            'alamat_kantor',
            // 'kota',
            // 'kecamatan',
            // 'kelurahan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
