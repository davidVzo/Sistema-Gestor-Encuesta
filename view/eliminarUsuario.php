<?php

require_once '../controllers/conexion.php';
//salgo de carpeto e ingreso
require_once '../controllers/funcionesUsuario.php';
$idUsuario = $_GET['id']; // formulario de consulta persona enlace eliminar 


if(eliminarUsuario($con, $idUsuario)){
    if(mysqli_affected_rows($con) > 0){
     echo '<script languaje = "javascript"> '
        . 'alert("Dato Eliminado Exitosamente !!");'
          . 'window.location= "listadoUsuarios.php" </script>';
    }
   
}else{
       echo '<script languaje = "javascript"> '
        . 'alert("No es posible eliminar !!");'
          . 'window.location= "listadoUsuario.php" </script>';
    echo "<br><a href ='listadoUsuario.php'> Regresar Consulta </a>";
}


?>
