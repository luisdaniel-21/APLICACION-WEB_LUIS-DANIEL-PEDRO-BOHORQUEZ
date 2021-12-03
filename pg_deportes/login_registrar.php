<?php

include("conexion.php");

$nombre = $_POST["username"];
$contraseña = $_POST["password"];

//INGRESAR 
if(isset($_POST["btningresar"]))
{

    $query =mysqli_query($conectar,"SELECT * FROM login WHERE usuario = '$nombre' AND contraseña = '$contraseña'");
    $nr = mysqli_num_rows($query);

    if($nr==1)
    {
        echo "<script> alert('BIENVENIDO: $nombre'); window.location='menu.html' </script>";
    }else
    {
        echo "<script> alert('EL USUARIO NO EXISTE'); window.location='index.html' </script>";
    }

}

//REGISTRAR

if(isset($_POST["btnregistrar"]))
{

    $sqlgrabar = "INSERT INTO login(usuario,contraseña) VALUES ('$nombre','$contraseña')";

    if(mysqli_query($conectar,$sqlgrabar))
    {
        echo "<script> alert('USUARIO REGISTRADO: $nombre'); window.location='index.html' </script>";
    }else{
        echo "ERROR: ".$sql."<br>".mysql_error($conectar);
    }

}

?>