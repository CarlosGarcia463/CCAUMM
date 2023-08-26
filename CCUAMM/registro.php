<?php
/*
//validar datos del sevidor
$user = "root";
$pass ="";
$host = "localhost";

//conectamos a la base de datos 
$connection = mysqli_connect($host, $user, $pass);

//declaramos los inputs
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$sala = $_POST["sala"];
$carrera = $_POST["Carrera"];
$grupo = $_POST["grupo"];
$materia = $_POST["materia"];
$cantidadAlumnos = $_POST["alumnos"];
$maestro = $_POST["maestro"];

//verificacion a la conexion de la base de datos
if(!$connection){
    //echo "no se ha podido coonectar a la abse de datos" ; 
    echo "<script>alert('No se ha podido conectar a la base de datos');</script>";


}else{
    //echo "<b><h3>Hemos conectado al seevidos</b></h3>";
    echo "<script>alert('¡Hemos conectado al servidor!');</script>";

}
//indicamos el nonbre de la base de datos
$datab = "ccuamm";
//indicamos seleccinar la base de datos
$db = mysqli_select_db($connection,$datab);

if(!$db){
    echo "No se ha podido encontrar la tabla";
}else{
    "<h3> Tabla encontrada>/h3>";

}
//inserccion de los datos

$instruccion_SQL ="INSERT INTO salas (fecha, hora, sala, Carrera, grupo, materia, alumnos,maestro) 
                                values('$fecha','$hora', '$sala','$carrera','$grupo', '$materia', '$alumnos', '$maestro')";

$resultado = mysqli_query($connection, $instruccion_SQL );

//consulta ----------------------
//$consulta = "SELECT * FROM salas";


*/
$user = "root";
$pass = "";
$host = "localhost";

// Conectamos a la base de datos
$connection = mysqli_connect($host, $user, $pass);

// Verificamos la conexión
if (!$connection) {
    die("La conexión falló: " . mysqli_connect_error());
}

// Seleccionamos la base de datos
$db_select = mysqli_select_db($connection, "ccuam");
if (!$db_select) {
    die("Error al seleccionar la base de datos: " . mysqli_error($connection));

}

// Declaramos los inputs
/*
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$sala = $_POST["sala"];
*/

if (isset($_POST["fecha"])) {
    $fecha = $_POST["fecha"];
} else {
    $fecha = ""; // O algún valor predeterminado si la clave no está definida
}



//$hora = $_POST["hora"];
// Verifica si la clave "hora" existe en el array $_POST antes de intentar acceder a ella
if (isset($_POST["hora"])) {
    $hora = $_POST["hora"];
} else {
    $hora = ""; // O algún valor predeterminado si la clave no está definida
}

//$sala = $_POST["sala"];
if (isset($_POST["Salas"])) {
    $sala = $_POST["Salas"];
} else {
    $sala = ""; // O algún valor predeterminado si la clave no está definida
}



//$carrera = $_POST["Carrera"];
//$grupo = $_POST["grupo"];
if (isset($_POST["Carrera"])) {
    $carrera = $_POST["Carrera"];
} else {
    $carrera = ""; // O algún valor predeterminado si la clave no está definida
}

if (isset($_POST["Grupo"])) {
    $grupo = $_POST["Grupo"];
} else {
    $grupo = ""; // O algún valor predeterminado si la clave no está definida
}
$semestre = $_POST["semestre"];
$materia = $_POST["materia"];
$alumnos = $_POST["alumnos"];
$maestro = $_POST["maestro"];

// Preparamos la consulta para insertar los datos
$consulta = "INSERT INTO salas (fecha, hora, sala, carrera, grupo, semestre, materia, alumnos, maestro) 
             VALUES ('$fecha', '$hora', '$sala', '$carrera', '$grupo', '$semestre','$materia', '$alumnos', '$maestro')";

/*
// Ejecutamos la consulta
if (mysqli_query($connection, $consulta)) {
   // echo "Datos insertados correctamente.";
   echo "<script>alert('¡Hemos conectado al servidor!');</script>";
} else {
    echo "Error al insertar los datos: " . mysqli_error($connection);
}
*/
if (mysqli_query($connection, $consulta)) {
    echo "<script>
            window.onload = function() {
                alert('¡Hemos agendado correctamente!');
                window.location.href = 'adsalas.html'; // Redirigir después de mostrar la alerta
            };
          </script>";
} else {
    echo "Error al insertar los datos: " . mysqli_error($connection);
}


// Cerramos la conexión
mysqli_close($connection);

?>