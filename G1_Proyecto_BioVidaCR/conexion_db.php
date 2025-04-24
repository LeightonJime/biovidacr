<?php
$host = 'localhost'; 
$usuario = 'root'; 
$contrasena = '';
$base_de_datos = 'biovidacr';

$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
