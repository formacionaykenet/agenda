<?php
// app/vistas/vista_pedir_id.php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('../config.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Modificar Usuario</h1>
    <form method="POST" action="../controlador/controlador_contactos.php" class="needs-validation" novalidate>
        <div class="form-group">
            <label for="id">ID del Usuario:</label>
            <input type="text" class="form-control" id="id" name="id" required>
            <input type="hidden" name="accion" value="modificar">
            <div class="invalid-feedback">Por favor, ingrese el ID del usuario.</div>
        </div>
        <input type="hidden" name="accion" value="modificar">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Ejemplo de JavaScript para deshabilitar el envío del formulario si hay campos no válidos
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>

