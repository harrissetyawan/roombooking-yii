<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\RuangRapat $model */

$this->title = 'Create Ruang Rapat';
$this->params['breadcrumbs'][] = ['label' => 'Ruang Rapats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-rapat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
