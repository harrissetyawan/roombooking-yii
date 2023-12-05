<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JadwalPeminjamanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jadwal-peminjaman-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_ruang') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jam_mulai') ?>

    <?= $form->field($model, 'jam_selesai') ?>

    <?php // echo $form->field($model, 'nama_peminjam') ?>

    <?php // echo $form->field($model, 'keperluan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
