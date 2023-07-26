<?php

function consultarCliente($con, $idCliente)
{
    $consulta = "SELECT * FROM cliente";
    if ($idCliente != null) {
        $consulta .= " WHERE id = '$idCliente'";
    }
    $resultado = $con->query($consulta);
    return $resultado;
}

function insertarCliente($con, $cedula, $nombre, $apellido, $telefono, $fecha_nacimiento, $direccion)
{
    $insertar = $con->query("INSERT INTO cliente(cedula, nombre, apellido, telefono, fecha_nacimiento, direccion) VALUES ('$cedula', '$nombre', '$apellido', '$telefono', '$fecha_nacimiento', '$direccion' )");
    return $insertar;
}





?>