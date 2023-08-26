<?php
/*
   session_start();
   include('conexion.php');

   if (isset($_POST['matricula']) && isset($_POST['contraseña']) ) {

   function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }

   $matricula = validate($_POST['matricula']); 
   $contraseña = validate($_POST['contraseña']);

   if (empty($matricula)) {
       header("Location: login.html?error=El Usuario Es Requerido");
       exit();
   }elseif (empty($contraseña)) {
       header("Location: login.html?error=La clave Es Requerida");
       exit();
   }else{

       // $Clave = md5($Clave);

       $Sql = "SELECT * FROM usuarios WHERE matricula= '$matricula' AND contraseña='$contraseña'";
       $result = mysqli_query($conexion, $Sql);

       if (mysqli_num_rows($result) === 1) {
           $row = mysqli_fetch_assoc($result);
           if ($row['matricula'] === $matricula && $row['contraseña'] === $contraseña) {
               $_SESSION['matricula'] = $row['matricula'];
              
               header("Location: adsalas.html");
               exit();
           }else {
               header("Location: login.html?error=El usuario o la clave son incorrectas");
               exit();
           }

       }else {
           header("Location: login.html?error=El usuario o la clave son incorrectas");
           exit();
       }
   }

} else {
   header("Location: login.html");
           exit();
}

*/

session_start();
include('conexion.php');

if (isset($_POST['matricula']) && isset($_POST['contraseña'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $matricula = validate($_POST['matricula']);
    $contraseña = validate($_POST['contraseña']);

    if (empty($matricula)) {
        header("Location: login.html?error=El Usuario Es Requerido");
        exit();
    } elseif (empty($contraseña)) {
        header("Location: login.html?error=La clave Es Requerida");
        exit();
    } else {

        // $Clave = md5($Clave);

        $Sql = "SELECT * FROM usuarios WHERE matricula= '$matricula' AND contraseña='$contraseña'";
        $result = mysqli_query($conexion, $Sql);

        echo json_encode($Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['matricula'] === $matricula && $row['contraseña'] === $contraseña) {
                $_SESSION['matricula'] = $row['matricula'];

                // Obtener el nombre del usuario de la base de datos
                $nombre = $row['nombre']; // Reemplaza 'nombre' con el nombre real de la columna en tu base de datos
                $_SESSION['nombre'] = $nombre; // Almacenar el nombre del usuario en la sesión

                header("Location: adsalas.html");
                exit();
            } else {
                header("Location: login.html?error=El usuario o la clave son incorrectas");
                exit();
            }

        } else {
            header("Location: login.html?error=El usuario o la clave son incorrectas");
            exit();
        }
    }

} else {
    header("Location: login.html");
    exit();
}
?>