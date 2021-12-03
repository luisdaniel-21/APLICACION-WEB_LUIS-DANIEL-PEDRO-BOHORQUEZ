<?php
include("cn.php");
$id = $_POST['id'];
$producto = $_POST['producto'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];

$actualizar = "UPDATE productos SET producto='$producto', marca='$marca', modelo='$modelo', precio='$precio'
WHERE id_producto='$id'";

$resultado=mysqli_query($conexion, $actualizar);

if($resultado) {
    echo "<script>alert('SE HA ACTUALIZADO CON EXITO'); window.location='ropa_R.php'</script>";

} else {
    echo "<script>alert('SE HA PRODUCIDO UN ERROR')  window.history.go(-1);</script>";

}