<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Gestión de Empresas - Mi Pyme';
?>

<div class="site-index text-center">
    <div class="jumbotron">
        <h1>Bienvenido a Gestión de Empresas - Mi Pyme</h1>
        <p class="lead">Tu solución integral para administrar empresas y recursos de manera eficiente.</p>
        <?= Html::a('Comienza a Gestionar', ['empresa/index'], ['class' => 'btn btn-lg btn-success']) ?>
    </div>
</div>
<br>
<br>

<div class="body-content text-center" style="margin-top: 50px;">
    <div class="row">
        <div class="col-lg-4" style="margin-bottom: 5px;">
            <h2>Registro de Empresas</h2>
            <p>Administra tus empresas de manera efectiva. Registra, edita y elimina empresas con facilidad.</p>
            <?= Html::a('Administra Empresas', ['empresa/index'], ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="col-lg-4" style="margin-bottom: 5px;">
            <h2>Gestión de Productos</h2>
            <p>Controla tus productos y existencias. Agrega, edita y realiza seguimiento de tus productos de manera eficiente.</p>
            <?= Html::a('Administra Productos', ['producto/index'], ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="col-lg-4" style="margin-bottom: 5px;">
            <h2>Registro de Compras</h2>
            <p>Registra las compras realizadas. Lleva un registro detallado de las transacciones de compra de tus empresas.</p>
            <?= Html::a('Registra Compras', ['compra/index'], ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-4" style="margin-bottom: 5px;">
            <h2>Gestión de Empleados</h2>
            <p>Administra a tus empleados. Registra sus datos y gestiona la información de tus equipos de trabajo.</p>
            <?= Html::a('Administra Empleados', ['empleado/index'], ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="col-lg-4" style="margin-bottom: 5px;">
            <h2>Gestión de Inventario</h2>
            <p>Lleva un control preciso de tus productos en diferentes ubicaciones. Optimiza la gestión de inventario de tus empresas.</p>
            <?= Html::a('Administra Inventario', ['inventario/index'], ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="col-lg-4" style="margin-bottom: 5px;">
            <h2>Gestión de Proveedores</h2>
            <p>Mantén un registro de tus proveedores y sus transacciones. Facilita la gestión de tus relaciones comerciales.</p>
            <?= Html::a('Administra Proveedores', ['proveedor/index'], ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>
