<?php
require '../controllers/conexion.php';
require '../controllers/funcionesUsuario.php';


if (isset($_POST['editar'])) {

    $Id = $_POST['id'];
    $Nombre = $_POST['nombre'];
    $Apellido = $_POST['apellido'];
    $Direccion = $_POST['direccion'];
    $Telefono = $_POST['telefono'];

    $Usuario = $_POST['usuario'];
    $Correo = $_POST['correo'];
    $Contrasena = $_POST['contrasena'];

    $inpCheckBox = $_POST['checkBox'];

    $Imagen = $_POST['inpImagen'];





    if ($inpCheckBox == "editarPerfil") {
        $selectImagen = $_FILES['imagen']['name'];

        if (isset($selectImagen) && $selectImagen != "") {

            $tipo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];

            $explode = explode('.', $selectImagen);
            $extension_foto = array_pop($explode);
            $newNameFoto = $Usuario . '.' . $extension_foto;



            if (!((strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'webp') || strpos($tipo, 'png')))) {
                echo '<script language="javascript"> alert("Formato de imagen no soportado !!");'
                    . ' window.location="registroUsuario.php" </script>';


            } else {

                // move_uploaded_file($temp, 'imagenes/'.$Usuario."-".  $Imagen);
                move_uploaded_file($temp, 'imagenes/' . $newNameFoto);

                $selectImagen = $newNameFoto;

            }

        } else {
            $selectImagen = $Imagen;
        }






        if (actualizarPerfil($con, $Id, $Usuario, $Contrasena, $selectImagen)) {

            echo '<script language="javascript"> alert(" Perfil Actualizado !!");'
                . ' window.location="listadoUsuarios.php" </script>';
        } else {
            echo '<script language="javascript"> alert("Perfil no actualizado !!");'
                . ' window.location="listadoUsuarios.php" </script>';
        }
    } else {
        if (actualizarUsuario($con, $Id, $Nombre, $Apellido, $Correo, $Telefono, $Direccion)) {

            echo '<script language="javascript"> alert("Usuario Actualizado !!");'
                . ' window.location="listadoUsuarios.php" </script>';
        } else {
            echo '<script language="javascript"> alert("Registro no actualizado !!");'
                . ' window.location="listadoUsuarios.php" </script>';

        }




    }




}




?>