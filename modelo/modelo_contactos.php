<?php

session_start();
// app/modelos/modelo_contactos.php
require_once '../conexion.php';

function obtenerContactoPorId($id) {
    $pdo = obtenerConexion();
    $stmt = $pdo->prepare("SELECT * FROM contactos WHERE id_contacto = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function obtenerContactos() {
    $pdo = obtenerConexion();
    $stmt = $pdo->query("SELECT * FROM contactos WHERE activo = 1");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function obtenerContacto($id) {
    $pdo = obtenerConexion();
    $stmt = $pdo->prepare("SELECT * FROM contactos WHERE id_contacto = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function agregarContacto($datos) {
    $pdo = obtenerConexion();
    $stmt = $pdo->prepare("INSERT INTO contactos (nombre, apellidos, telefono, mail, instagram, tiktok, domicilio, poblacion, provincia, pais, activo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    return $stmt->execute($datos);
}

function actualizarContacto($id, $datos) {
    $pdo = obtenerConexion();
    $stmt = $pdo->prepare("UPDATE contactos SET nombre = ?, apellidos = ?, telefono = ?, mail = ?, instagram = ?, tiktok = ?, domicilio = ?, poblacion = ?, provincia = ?, pais = ?, activo = ? WHERE id_contacto = ?");
    return $stmt->execute(array_merge($datos, [$id]));
}

function eliminarContacto($id) {
    $pdo = obtenerConexion();
    $stmt = $pdo->prepare("UPDATE contactos SET activo = 0, WHERE id_contacto = ?");
    return $stmt->execute([$id]);
}

/*function eliminarContacto($id) {
    $pdo = obtenerConexion();
    $stmt = $pdo->prepare("DELETE FROM contactos WHERE id_contacto = ?");
    return $stmt->execute([$id]);
}*/
?>
