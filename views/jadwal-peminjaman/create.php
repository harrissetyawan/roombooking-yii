<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JadwalPeminjaman $model */

$this->title = 'Create Jadwal Peminjaman';
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-peminjaman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
