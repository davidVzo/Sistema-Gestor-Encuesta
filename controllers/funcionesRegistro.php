<?php

function consultarRegistro($con, $idRegistro)
{
    $consulta = "SELECT R.id, R.fecha, R.id_cliente, E.pregunta_1, E.pregunta_2, E.pregunta_3, E.pregunta_4, E.pregunta_5, E.pregunta_6, E.pregunta_7
    FROM registro R, encuesta E, cliente C WHERE R.id_encuesta = E.id AND R.id_cliente = C.cedula  ";
    if ($idRegistro != null) {
        $consulta .= " WHERE R.id_encuesta = E.id AND R.id_cliente = C.cedula ";
    }
    $resultado = $con->query($consulta);
    return $resultado;
}

function insertarRegistro($con, $id, $fecha, $idCliente, $idEncuesta)
{
    $insertar = $con->query("INSERT INTO registro(id, fecha, id_cliente, id_encuesta) VALUES('$id', '$fecha', '$idCliente', '$idEncuesta') ");
    return $insertar;

}

?>