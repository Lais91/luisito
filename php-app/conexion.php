<?php

$conexion= new mysqli("172.30.0.1", "root", "example", "prod2", null, "/var/run/mysqld/mysqld.sock");

if ($conexion ->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$conexion->set_charset("utf8");
?>