<?php

function insertarCliente($con, $id_cliente, $cedula, $nombre, $apellido, $telefono, $fecha_nacimiento, $direccion)
{
    $insertar = $con->query("INSERT INTO cliente(id, cedula, nombre, apellido, telefono, fecha_nacimiento, direccion) VALUES ('$id_cliente', '$cedula', '$nombre', '$apellido', '$telefono', '$fecha_nacimiento', '$direccion' )");
    return $insertar;
}





?>