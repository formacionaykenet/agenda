<?php
// app/vistas/vista_baja.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Baja de Contacto</title>
</head>
<body>
    <h1>Baja de Contacto</h1>
    <form action="<?= CONTROLADOR_PATH ?>/controlador_contactos.php" method="post">
        <input type="hidden" name="accion" value="baja">
        ID del Contacto: <input type="number" name="id_contacto" required><br>
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>