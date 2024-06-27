<?php
// app/vistas/vista_listado.php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('../config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Contactos</title>
</head>
<body>
    <h1>Listado de Contactos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Instagram</th>
                <th>TikTok</th>
                <th>Domicilio</th>
                <th>Población</th>
                <th>Provincia</th>
                <th>País</th>
                <th>Activo</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($contactos) && count($contactos) > 0): ?>
                <?php foreach ($contactos as $contacto): ?>
                    <tr>
                        <td><?= htmlspecialchars($contacto['id_contacto']) ?></td>
                        <td><?= htmlspecialchars($contacto['nombre']) ?></td>
                        <td><?= htmlspecialchars($contacto['apellidos']) ?></td>
                        <td><?= htmlspecialchars($contacto['telefono']) ?></td>
                        <td><?= htmlspecialchars($contacto['mail']) ?></td>
                        <td><?= htmlspecialchars($contacto['instagram']) ?></td>
                        <td><?= htmlspecialchars($contacto['tiktok']) ?></td>
                        <td><?= htmlspecialchars($contacto['domicilio']) ?></td>
                        <td><?= htmlspecialchars($contacto['poblacion']) ?></td>
                        <td><?= htmlspecialchars($contacto['provincia']) ?></td>
                        <td><?= htmlspecialchars($contacto['pais']) ?></td>
                        <td><?= htmlspecialchars($contacto['activo'] ? 'Sí' : 'No') ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="12">No hay contactos disponibles</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
