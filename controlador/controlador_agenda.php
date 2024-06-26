<?php
// app/controladores/controlador_contactos.php
require_once MODELO_PATH . '/modelo_contactos.php';

$accion = $_POST['accion'] ?? null;

switch ($accion) {
    case 'alta':
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
            $_POST['activo']
        ];
        agregarContacto($datos);
        header('Location: /public/index.php');
        break;
    case 'baja':
        $id = $_POST['id_contacto'];
        eliminarContacto($id);
        header('Location: /public/index.php');
        break;
    case 'modificacion':
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
            $_POST['activo']
        ];
        actualizarContacto($id, $datos);
        header('Location: /public/index.php');
        break;
    case 'consulta':
        $id = $_POST['id_contacto'];
        $contacto = obtenerContacto($id);
        include VISTAS_PATH . '/vista_consulta.php';
        break;
    case 'listado':
        $contactos = obtenerContactos();
        include VISTAS_PATH . '/vista_listado.php';
        break;
    default:
        header('Location: /public/index.php');
        break;
}
?>
