<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["accion"]) && $_POST["accion"] == "editar") {
        // Realizar acciones de edición en la base de datos o cualquier otra acción
        // ...
        echo "Acción de edición ejecutada";
    } elseif (isset($_POST["accion"]) && $_POST["accion"] == "eliminar") {
        // Realizar acciones de eliminación en la base de datos o cualquier otra acción
        // ...
        //echo "Acción de eliminación ejecutada";





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
        
        // Eliminar registro por ID
        if (isset($_POST["eliminar_id"])) {
            $eliminar_id = $_POST["eliminar_id"];
            
            $eliminar_consulta = "DELETE FROM salas WHERE id = $eliminar_id";
            
            if (mysqli_query($connection, $eliminar_consulta)) {
                echo "<script>
                        window.onload = function() {
                            alert('¡Registro eliminado correctamente!');
                            window.location.href = 'agenda.html'; // Redirigir después de mostrar la alerta
                        };
                      </script>";
            } else {
                echo "Error al eliminar el registro: " . mysqli_error($connection);
            }
        }
        
        // Cerramos la conexión
        mysqli_close($connection);

    }
}





?>
