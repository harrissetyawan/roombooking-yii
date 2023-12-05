<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\RuangRapat $model */

$this->title = 'Update Ruang Rapat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ruang Rapats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ruang-rapat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
