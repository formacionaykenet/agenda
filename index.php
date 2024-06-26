<?php
// public/index.php

session_start();

error_reporting(E_ALL ^ E_NOTICE);

require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Contactos</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-5">Gestión de Contactos</h1>
    <div class="row">
        <div class="col-md-2">
            <a href="controlador/controlador_contactos.php?accion=alta" class="btn btn-primary btn-block mb-3">
                <i class="fas fa-user-plus"></i> Alta
            </a>
        </div>
        <div class="col-md-2">
            <a href="controlador/controlador_contactos.php?accion=baja" class="btn btn-danger btn-block mb-3">
                <i class="fas fa-user-minus"></i> Baja
            </a>
        </div>
        <div class="col-md-2">
            <a href="controlador/controlador_contactos.php?accion=modificacion" class="btn btn-warning btn-block mb-3">
                <i class="fas fa-user-edit"></i> Modificación
            </a>
        </div>
        <div class="col-md-2">
            <a href="controlador/controlador_contactos.php?accion=consulta" class="btn btn-info btn-block mb-3">
                <i class="fas fa-search"></i> Consulta
            </a>
        </div>
        <div class="col-md-2">
            <a href="controlador/controlador_contactos.php?accion=listado" class="btn btn-success btn-block mb-3">
                <i class="fas fa-list"></i> Listado
            </a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
