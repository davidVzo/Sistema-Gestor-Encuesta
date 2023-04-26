<?php

$con = new mysqli("localhost","root","","dbLogin");
if ($con->connect_error) {
    //echo "ERROR EN LA CONEXION :N° ".$con->connect_errno."<br> Detalle:".$con->connect_error;
    
}else{
    //echo "CONEXION EXITOSA !!!";
}

//CONNCET_ERROR DEVUELVE LA DESCRIPCION DEL ULTIMO ERROR EN LA CONEXION
//CONNECT_ERRNO: DEVUELVE EL IDENTIFICADOR /NUMEROS 

// $con = new mysqli('localhost','id19478358_login',"pYEf<0{0oWO84zWv",'id19478358_dblogin');

?>

