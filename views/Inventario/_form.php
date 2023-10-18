<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Inventario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inventario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'producto_id')->textInput() ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <?= $form->field($model, 'ubicacion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
