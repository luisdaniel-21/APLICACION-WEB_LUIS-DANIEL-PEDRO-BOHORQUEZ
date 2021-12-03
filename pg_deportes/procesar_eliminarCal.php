<?php
include("cn.php");

$id = $_GET['id2'];

$eliminarC = "DELETE FROM calzado WHERE id_calzado = '$id'";

$resultadoEliminarC = mysqli_query($conexion, $eliminarC);

if($resultadoEliminarC) {

    header("Location: edicionR.php");

} else {
    echo "<script>alert('SE HA PRODUCIDO UN ERROR')  window.history.go(-1);</script>";

}