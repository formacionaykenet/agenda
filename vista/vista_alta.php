<?php
// /vistas/vista_alta.php
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Contacto</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Alta de Contacto</h1>
    <form action="../controlador/controlador_contactos.php?accion=procesar_alta" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group col-md-6">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="form-group col-md-6">
                <label for="mail">Email:</label>
                <input type="email" class="form-control" id="mail" name="mail">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="instagram">Instagram:</label>
                <input type="text" class="form-control" id="instagram" name="instagram">
            </div>
            <div class="form-group col-md-6">
                <label for="tiktok">TikTok:</label>
                <input type="text" class="form-control" id="tiktok" name="tiktok">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="domicilio">Domicilio:</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio">
            </div>
            <div class="form-group col-md-6">
                <label for="poblacion">Población:</label>
                <input type="text" class="form-control" id="poblacion" name="poblacion">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="provincia">Provincia:</label>
                <input type="text" class="form-control" id="provincia" name="provincia">
            </div>
            <div class="form-group col-md-6">
                <label for="pais">País:</label>
                <input type="text" class="form-control" id="pais" name="pais">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 form-check">
                <input type="checkbox" class="form-check-input" id="activo" name="activo" value="1">
                <label class="form-check-label" for="activo">Activo</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/

