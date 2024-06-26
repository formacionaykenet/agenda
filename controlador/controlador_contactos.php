<?php
// app/controladores/controlador_contactos.php

session_start();

require_once '../config.php';
require_once MODELO_PATH . '/modelo_contactos.php';

// Obtener la acción desde la URL
$accion = $_GET['accion'] ?? null;

switch ($accion) {
    case 'alta':
        include VISTAS_PATH . '/vista_alta.php';
        break;

    case 'baja':
        include VISTAS_PATH . '/vista_baja.php';
        break;

    case 'modificacion':
        include VISTAS_PATH . '/vista_modificacion.php';
        break;

    case 'consulta':
        include VISTAS_PATH . '/vista_consulta.php';
        break;

    case 'listado':
        $contactos = obtenerContactos();
        include VISTAS_PATH . '/vista_listado.php';
        break;

    case 'procesar_alta':
        $datos = [
            $_POST['nombre'],
            $_POST['apellidos'],
            $_POST['telefono'],
            $_POST['mail'],
            $_POST['instagram'],
            $_POST['tiktok'],
            $_POST['domicilio'],
            $_POST['poblacion'],
            $_POST['provincia'],
            $_POST['pais'],
            isset($_POST['activo']) ? 1 : 0
        ];
        agregarContacto($datos);
        header('Location: ../index.php');
        break;

    case 'procesar_baja':
        $id = $_POST['id_contacto'];
        eliminarContacto($id);
        header('Location: ../index.php');
        break;

    case 'procesar_modificacion':
        $id = $_POST['id_contacto'];
        $datos = [
            $_POST['nombre'],
            $_POST['apellidos'],
            $_POST['telefono'],
            $_POST['mail'],
            $_POST['instagram'],
            $_POST['tiktok'],
            $_POST['domicilio'],
            $_POST['poblacion'],
            $_POST['provincia'],
            $_POST['pais'],
            isset($_POST['activo']) ? 1 : 0
        ];
        actualizarContacto($id, $datos);
        header('Location: ../index.php');
        break;

    case 'procesar_consulta':
        $id = $_POST['id_contacto'];
        $contacto = obtenerContacto($id);
        include VISTAS_PATH . '/vista_consulta.php';
        break;

    default:
        header('Location: ../index.php');
        break;
}
?>
