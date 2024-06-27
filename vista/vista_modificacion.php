<?php
// app/vistas/vista_modificacion.php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('../config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación de Contacto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Modificación de Contacto</h1>
    <form action="../controlador/controlador_contactos.php" method="post" class="needs-validation" novalidate>
        <input type="hidden" name="accion" value="procesar_modificacion">
        <input type="hidden" name="id_contacto" value="<?php echo htmlspecialchars($contacto['id_contacto']); ?>">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($contacto['nombre']); ?>" required>
                <div class="invalid-feedback">Por favor, ingrese un nombre.</div>
            </div>
            <div class="form-group col-md-6">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo htmlspecialchars($contacto['apellidos']); ?>" required>
                <div class="invalid-feedback">Por favor, ingrese los apellidos.</div>
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo htmlspecialchars($contacto['telefono']); ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="mail">Email</label>
                <input type="email" class="form-control" id="mail" name="mail" value="<?php echo htmlspecialchars($contacto['mail']); ?>">
                <div class="invalid-feedback">Por favor, ingrese un correo electrónico válido.</div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="instagram">Instagram</label>
                <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo htmlspecialchars($contacto['instagram']); ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="tiktok">TikTok</label>
                <input type="text" class="form-control" id="tiktok" name="tiktok" value="<?php echo htmlspecialchars($contacto['tiktok']); ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="domicilio">Domicilio</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio" value="<?php echo htmlspecialchars($contacto['domicilio']); ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="poblacion">Población</label>
                <input type="text" class="form-control" id="poblacion" name="poblacion" value="<?php echo htmlspecialchars($contacto['poblacion']); ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="provincia">Provincia</label>
                <input type="text" class="form-control" id="provincia" name="provincia" value="<?php echo htmlspecialchars($contacto['provincia']); ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="pais">País</label>
                <input type="text" class="form-control" id="pais" name="pais" value="<?php echo htmlspecialchars($contacto['pais']); ?>">
            </div>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="activo" name="activo" value="1" <?php echo $contacto['activo'] ? 'checked' : ''; ?>>
            <label class="form-check-label" for="activo">Activo</label>
        </div>

        <button type="submit" class="btn btn-primary">Modificar</button>
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

