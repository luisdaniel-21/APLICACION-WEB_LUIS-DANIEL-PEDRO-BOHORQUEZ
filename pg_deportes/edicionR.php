
<?php
    include("cn.php");
    $calzado = "SELECT * FROM calzado";
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR CALZADO</title>
    <link rel="stylesheet" href="css/tabla.css">
</head>
<body>

    <div class="container-table container-table-edit">
        <div class="table__title table__title-edit">CALZADOS REGISTRADOS</div>
    
        <div class="table__header">PRODUCTO</div>
        <div class="table__header">MARCA</div>
        <div class="table__header">MODELO</div>
        <div class="table__header">PRECIO</div>
        <div class="table__header">OPERACION</div>

        <?php
            $resultado = mysqli_query($conexion, $calzado);
            while($row=mysqli_fetch_assoc($resultado)) { ?>

        <div class="table__item"> <?php echo $row["producto"] ?> </div>
        <div class="table__item"> <?php echo $row["marca"] ?> </div>
        <div class="table__item"> <?php echo $row["modelo"] ?> </div>
        <div class="table__item"> <?php echo $row["precio"] ?> </div>
        <div class="table__item">
            <a  title="ACTUALIZAR" style="text-decoration:none" href="actualizarCal.php?id2=<?php echo $row["id_calzado"];?>" class="table__item__link3">&#9997;</a> |  
            <a  title="ELIMINAR" style="text-decoration:none" href="procesar_eliminarCal.php?id2=<?php echo $row["id_calzado"];?>" class="table__item__link4">&#128686;</a>
        </div>

        <?php } mysqli_free_result($resultado); ?>

    </div>
    
    <script  src="confirmacion2.js"> </script>

    <main>
        <div align="center">
        <a title="Menu" href="menu.html" ><img src="img/retorno.png" height="100" width="100"/></a></div>
    </main>

</body>
</html>