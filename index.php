<?php
// public/index.php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Contactos</title>
</head>
<body>
    <h1>Gestión de Contactos</h1>
    <form action="<?= CONTROLADOR_PATH ?>/controlador_contactos.php" method="post">
        <input type="hidden" name="accion" value="alta">
        <button type="submit">Alta</button>
    </form>
    <form action="<?= CONTROLADOR_PATH ?>/controlador_contactos.php" method="post">
        <input type="hidden" name="accion" value="baja">
        <button type="submit">Baja</button>
    </form>
    <form action="<?= CONTROLADOR_PATH ?>/controlador_contactos.php" method="post">
        <input type="hidden" name="accion" value="modificacion">
        <button type="submit">Modificación</button>
    </form>
    <form action="<?= CONTROLADOR_PATH ?>/controlador_contactos.php" method="post">
        <input type="hidden" name="accion" value="consulta">
        <button type="submit">Consulta</button>
    </form>
    <form action="<?= CONTROLADOR_PATH ?>/controlador_contactos.php" method="post">
        <input type="hidden" name="accion" value="listado">
        <button type="submit">Listado</button>
    </form>
</body>
</html>
