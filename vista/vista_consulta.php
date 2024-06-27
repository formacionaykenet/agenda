<?php
// app/vistas/vista_consulta.php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('../config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Contacto</title>
</head>
<body>
    <h1>Consulta de Contacto</h1>
    <form action="<?= CONTROLADOR_PATH ?>/controlador_contactos.php" method="post">
        <input type="hidden" name="accion" value="consulta">
        ID del Contacto: <input type="number" name="id_contacto" required><br>
        <button type="submit">Consultar</button>
    </form>

    <?php if (isset($contacto)): ?>
        <h2>Detalles del Contacto</h2>
        <p>ID: <?= htmlspecialchars($contacto['id_contacto']) ?></p>
        <p>Nombre: <?= htmlspecialchars($contacto['nombre']) ?></p>
        <p>Apellidos: <?= htmlspecialchars($contacto['apellidos']) ?></p>
        <p>Teléfono: <?= htmlspecialchars($contacto['telefono']) ?></p>
        <p>Email: <?= htmlspecialchars($contacto['mail']) ?></p>
        <p>Instagram: <?= htmlspecialchars($contacto['instagram']) ?></p>
        <p>TikTok: <?= htmlspecialchars($contacto['tiktok']) ?></p>
        <p>Domicilio: <?= htmlspecialchars($contacto['domicilio']) ?></p>
        <p>Población: <?= htmlspecialchars($contacto['poblacion']) ?></p>
        <p>Provincia: <?= htmlspecialchars($contacto['provincia']) ?></p>
        <p>País: <?= htmlspecialchars($contacto['pais']) ?></p>
        <p>Activo: <?= htmlspecialchars($contacto['activo'] ? 'Sí' : 'No') ?></p>
    <?php endif; ?>
</body>
</html>
