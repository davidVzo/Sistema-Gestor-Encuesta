<?php
function consultarUsuario($con, $codUsuario)
{
    $consulta = "SELECT * FROM usuario";
    if ($codUsuario != null) {
        $consulta .= " WHERE id = '$codUsuario'";
    }
    $resultado = $con->query($consulta);
    return $resultado;
}

function loginUsuario($con, $Usuario, $Contrasena)
{
    $consulta = "SELECT * FROM usuario";
    if ($Usuario != null) {
        $consulta .= " WHERE usuario = '$Usuario' AND contrasena = '$Contrasena' ";
    }
    $resultado = $con->query($consulta);
    return $resultado;
}


// function  consultarCedula($con,$cedula){
//     $consulta = "SELECT * FROM persona";
//     if($cedula != null){
//         $consulta .= " WHERE CEDULA = '$cedula'";       
//     }
//     $resultado = $con->query($consulta);
//     return $resultado;
// }

function insertarUsuario($con, $id, $usuario, $contrasena, $nombre, $apellido, $direccion, $telefono, $correo, $imagen, $cedula, $estado)
{
    $insertar = $con->query("INSERT INTO usuario(id, usuario, contrasena, nombre, apellido, direccion, telefono, correo, imagen, cedula, estado )"
        . "VALUES ('$id','$usuario','$contrasena', '$nombre', '$apellido', '$direccion', '$telefono', '$correo', '$imagen', '$cedula', '$estado')");
    //Antes del value se hace referencia a los campos de la BDD
    //En el VALUES  se hace referencia a los datos/parametros que se van a ingresar
    return $insertar;
}

function actualizarPerfil($con, $id, $usuario, $contrasena, $imagen)
{
    $actualizar = $con->query("UPDATE usuario SET usuario = '$usuario', contrasena = '$contrasena', imagen = '$imagen' WHERE id = '$id'");
    return $actualizar;
}

function actualizarUsuario($con, $id, $nombre, $apellido, $correo, $telefono, $direccion, $estado)
{
    //LAS PK de las tablas no se deben actualizar 
    $actualizar = $con->query("UPDATE usuario SET nombre = '$nombre', "
        . "apellido = '$apellido', correo = '$correo', telefono = '$telefono', direccion = '$direccion', estado = '$estado' WHERE id = '$id'");
    return $actualizar;
}

function eliminarUsuario($con, $id)
{
    $eliminar = $con->query("DELETE FROM usuario WHERE id = '$id'");
    return $eliminar;
    //CRUD    
//C: Create / Crear / Insertar
//R: Read
//U: Update
//D: Delete
}
?>