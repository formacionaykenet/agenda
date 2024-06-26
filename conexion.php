<?php
// conexion.php
function obtenerConexion() {
    $dsn = 'mysql:host=localhost;dbname=agenda';
    $usuario = 'root';
    $contrasena = '';
    try {
        $pdo = new PDO($dsn, $usuario, $contrasena);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo 'Error de conexión: ' . $e->getMessage();
        exit;
    }
}
?>
