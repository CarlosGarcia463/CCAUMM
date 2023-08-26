<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "ccuam";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno) {
    die("Error en conexion" . $conexion->connect_errno);

} else {
    echo "conectado";
}

?>