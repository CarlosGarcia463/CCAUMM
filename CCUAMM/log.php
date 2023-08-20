<?php
require_once '../includes/conexion.php';
require_once '../includes/funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['matricula'];
    $contraseña = $_POST['contraseña'];

    $sql = "SELECT * FROM usuarios WHERE matricula = '$matricula' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['contraseña'] = $contraseña;
        header("Location: bienvenido.php");
    } else {
        $error = "Nombre de usuario o contraseña incorrectos";
    }
}

$conn->close();
?>