<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Compra $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="compra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'empleado_id')->textInput() ?>

    <?= $form->field($model, 'proveedor_id')->textInput() ?>

    <?= $form->field($model, 'producto_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
