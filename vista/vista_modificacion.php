<?php
// app/vistas/vista_modificacion.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificación de Contacto</title>
</head>
<body>
    <h1>Modificación de Contacto</h1>
    <form action="<?= CONTROLADOR_PATH ?>/controlador_contactos.php" method="post">
        <input type="hidden" name="accion" value="modificacion">
        ID del Contacto: <input type="number" name="id_contacto" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        Apellidos: <input type="text" name="apellidos" required><br>
        Teléfono: <input type="text" name="telefono"><br>
        Email: <input type="email" name="mail"><br>
        Instagram: <input type="text" name="instagram"><br>
        TikTok: <input type="text" name="tiktok"><br>
        Domicilio: <input type="text" name="domicilio"><br>
        Población: <input type="text" name="poblacion"><br>
        Provincia: <input type="text" name="provincia"><br>
        País: <input type="text" name="pais"><br>
        Activo: <input type="checkbox" name="activo" value="1"><br>
        <button type="submit">Modificar</button>
    </form>
</body>
</html>
