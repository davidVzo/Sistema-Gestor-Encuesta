<?php
require '../controllers/conexion.php';
require '../controllers/funcionesUsuario.php';

//$Usuario = "juan";
//$Contrasena = "david";

if (isset($_POST['login'])) {
  $inpUsuario = $_POST["usuario"];
  $inpContrasena = $_POST["contrasena"];

  $existeUsuario = mysqli_num_rows(loginUsuario($con,$inpUsuario,$inpContrasena));
  if ($existeUsuario != 0) {
    
      # Significa que coinciden, así que vamos a guardar algo
      # en el arreglo superglobal $_SESSION, ya que ese arreglo
      # "persiste" a través de todas las páginas
      # Iniciar sesión para poder usar el arreglo
      session_start();
      # Y guardar un valor que nos pueda decir si el usuario
      # ya ha iniciado sesión o no. En este caso es el nombre
      # de usuario
      $_SESSION["usuario"] = $inpUsuario;
      # Luego redireccionamos a la página "Secreta"
      //echo("correcto");
      header("location: principal.php");
    
      # No coinciden, así que simplemente imprimimos un
      # mensaje diciendo que es incorrecto
     // echo "El usuario o la contraseña son incorrectos";
     // header("Location: ../index.php");
     
      
    
  }else{
    echo '<script language="javascript"> alert("Usuario incorrecto !!");'
    . ' window.location="../index.php" </script>';

  }


}else{
  echo("no se pudo inciar sesion");
}
?>