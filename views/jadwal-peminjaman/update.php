<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JadwalPeminjaman $model */

$this->title = 'Update Jadwal Peminjaman: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwal-peminjaman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
