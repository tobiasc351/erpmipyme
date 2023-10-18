<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Datomaestroempresa $model */

$this->title = 'Update Datomaestroempresa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Datomaestroempresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datomaestroempresa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
