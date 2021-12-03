<?php

include ("cn.php");

$producto = $_POST["producto"];
$marca = $_POST["cantidad"];
$modelo = $_POST["precio"];
$precio = $_POST["total"];

$insertarventa = "INSERT INTO ventas(producto, cantidad, precio, total) 
VALUES('$producto','$marca','$modelo','$precio')";

$resultado = mysqli_query($conexion, $insertarventa);

if($resultado) {
    echo "<script>alert('SE HA REGISTRADO EL PRODUCTO CON EXITO'); window.location='menu.html'</script>";

} else {
    echo "<script>alert('SE HA PRODUCIDO UN ERROR')  window.history.go(-1);</script>";

}