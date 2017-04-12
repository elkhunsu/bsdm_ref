<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alamat */

$this->title = 'Update Alamat: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Alamats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alamat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
