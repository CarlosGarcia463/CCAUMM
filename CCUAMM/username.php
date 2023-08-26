<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccuam";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener datos de la tabla
$sql = "SELECT nombre FROM usuarios";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

// Devolver los datos en formato JSON
echo json_encode($data);
?>