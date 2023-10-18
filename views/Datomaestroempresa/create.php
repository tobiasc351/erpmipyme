<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Datomaestroempresa $model */

$this->title = 'Create Datomaestroempresa';
$this->params['breadcrumbs'][] = ['label' => 'Datomaestroempresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datomaestroempresa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
