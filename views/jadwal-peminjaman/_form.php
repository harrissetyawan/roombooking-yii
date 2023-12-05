<?php

use yii\helpers\ArrayHelper;
use app\models\RuangRapat;
use kartik\time\TimePicker;
use yii\jui\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JadwalPeminjaman $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jadwal-peminjaman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ruang')->dropDownList(
    ArrayHelper::map(RuangRapat::find()->all(), 'id', 'nama_ruang'),
    ['prompt' => 'Pilih Ruang Rapat']
) ?>

<?= $form->field($model, 'tanggal')->widget(DatePicker::classname(), [
    'options' => ['class' => 'form-control'],
    'dateFormat' => 'yyyy-MM-dd',
    'clientOptions' => [
        'changeYear' => true,
        'changeMonth' => true,
        'yearRange' => '2023:2023',
    ],
]) ?>

    <?= $form->field($model, 'jam_mulai')->widget(TimePicker::classname(), [
    'options' => ['placeholder' => 'Pilih Jam Mulai'],
    'pluginOptions' => [
        'showSeconds' => false,
        'showMeridian' => false,
        'minuteStep' => 1,
        'secondStep' => 5,
    ]
]) ?>

    <?= $form->field($model, 'jam_selesai')->widget(TimePicker::classname(), [
    'options' => ['placeholder' => 'Pilih Jam Selesai'],
    'pluginOptions' => [
        'showSeconds' => false,
        'showMeridian' => false,
        'minuteStep' => 1,
        'secondStep' => 5,
    ]
]) ?>

    <?= $form->field($model, 'nama_peminjam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keperluan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
