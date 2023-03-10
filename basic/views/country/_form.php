<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
//use common\components\Modal;
use kartik\form\ActiveForm;
use kartik\widgets\DateTimePicker;

/** @var yii\web\View $this */
/** @var app\models\Country $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="country-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'population')->textInput() ?>

    <?= $form->field($model, 'data')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Enter event time ...'],
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]);?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
