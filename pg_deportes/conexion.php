<?php

$db_host = "localhost";
$user    = "root";
$pasw    = "123";
$bd_name = "deportes_bd";

$conectar = mysqli_connect($db_host,$user,$pasw,$bd_name);

if(!$conectar)
{

    die("NO SE PUDO REALIZAR LA CONEXION, USUARIO INEXISTENTE" .mysqli_connect_error());

}
?>