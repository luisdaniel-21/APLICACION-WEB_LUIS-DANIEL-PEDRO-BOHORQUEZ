<?php
include("cn.php");
$id = $_POST['id2'];
$producto = $_POST['producto'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];

$actualizarC = "UPDATE calzado SET producto='$producto', marca='$marca', modelo='$modelo', precio='$precio'
WHERE id_calzado='$id'";

$resultado=mysqli_query($conexion, $actualizarC);

if($resultado) {
    echo "<script>alert('SE HA ACTUALIZADO CON EXITO'); window.location='calzado_registrado.php'</script>";

} else {
    echo "<script>alert('SE HA PRODUCIDO UN ERROR')  window.history.go(-1);</script>";

}