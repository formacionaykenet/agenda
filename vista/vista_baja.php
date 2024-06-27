<?php
// /vistas/vista_baja.php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('../config.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Baja de Contacto</title>
</head>

<body>
    <h1>Baja de Contacto</h1>
    <form action="../controlador/controlador_contactos.php" method="post">
        <input type="hidden" name="accion" value="baja">
        ID del Contacto: <input type="number" name="id_contacto" required><br>
        <button type="submit">Eliminar</button>
    </form>
</body>

</html>