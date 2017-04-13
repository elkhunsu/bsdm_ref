<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'ref') ?>

            <?= $form->field($member, 'no_hp') ?>

            <?= $form->field($member, 'ktp') ?>

            <?= $form->field($member, 'tanggal_lahir') ?>

            <?= $form->field($member, 'tempat_lahir') ?>

            <?= $form->field($member, 'jenis_kelamin') ?>

            <?= $form->field($member, 'ibu_kandung') ?>

            <?= $form->field($alamat, 'alamat') ?>

            <?= $form->field($alamat, 'kota') ?>

            <?= $form->field($alamat, 'kecamatan') ?>

            <?= $form->field($alamat, 'kelurahan') ?>

            <?= $form->field($kerja, 'pekerjaan') ?>

            <?= $form->field($kerja, 'no_telp') ?>

            <?= $form->field($kerja, 'lama_bekerja') ?>

            <?= $form->field($kerja, 'alamat_kantor') ?>

            <?= $form->field($kerja, 'kota') ?>



            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
