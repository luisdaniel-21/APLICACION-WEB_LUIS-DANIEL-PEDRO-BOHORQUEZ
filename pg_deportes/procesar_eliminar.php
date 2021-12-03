<?php
include("cn.php");

$id = $_GET['id'];

$eliminar = "DELETE FROM productos WHERE id_producto = '$id'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar) {

    header("Location: edicionP.php");

} else {
    echo "<script>alert('SE HA PRODUCIDO UN ERROR')  window.history.go(-1);</script>";

}