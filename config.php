<?php

session_start();

// config/config.php

// Definir la ruta base del proyecto
define('BASE_PATH', '/agenda');

// Definir la ruta absoluta del proyecto en el servidor
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . BASE_PATH);


define('MODELO_PATH', ROOT_PATH . '/modelo');
define('VISTAS_PATH', ROOT_PATH . '/vista');
define('CONTROLADOR_PATH', ROOT_PATH . '/controlador');
?>
