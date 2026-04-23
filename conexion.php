<?php //conexion a la base de datos 
$host = "localhost";
$user = "root";
$pass = "";
$db   = "login_soporte_db";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>