<?php

$numero = 1;
$numero++;
$numero_formateado = str_pad($numero, 3, "0", STR_PAD_LEFT);
echo $numero_formateado;  // Salida: 001


?>