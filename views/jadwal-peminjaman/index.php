<?php

use app\models\JadwalPeminjaman;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\JadwalPeminjamanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jadwal Peminjamen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-peminjaman-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jadwal Peminjaman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_ruang',
            'tanggal',
            'jam_mulai',
            'jam_selesai',
            //'nama_peminjam',
            //'keperluan:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JadwalPeminjaman $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
