<?php

    function insertarRegistro($con, $id, $fecha, $idCliente, $idEncuesta)
    {
        $insertar = $con->query("INSERT INTO registro(id, fecha, id_cliente, id_encuesta) VALUES('$id', '$fecha', '$idCliente', '$idEncuesta') ");
        return $insertar;
        
    }





?>