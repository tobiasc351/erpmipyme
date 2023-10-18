<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\EmpleadoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="empleado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellido') ?>

    <?= $form->field($model, 'numero') ?>

    <?= $form->field($model, 'residencia') ?>

    <?php // echo $form->field($model, 'curso') ?>

    <?php // echo $form->field($model, 'empresa_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
