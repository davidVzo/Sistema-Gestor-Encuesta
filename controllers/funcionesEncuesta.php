<?php

function insertarEncuesta($con, $id, $pregunta_1, $pregunta_2, $pregunta_3, $pregunta_4, $pregunta_5, $pregunta_6, $pregunta_7)
{
    $insertar = $con->query("INSERT INTO encuesta(id, pregunta_1, pregunta_2, pregunta_3, pregunta_4, pregunta_5, pregunta_6, pregunta_7) VALUES( '$id', '$pregunta_1', '$pregunta_2', '$pregunta_3', '$pregunta_4', '$pregunta_5', '$pregunta_6', '$pregunta_7' )");
    return $insertar;

}

?>