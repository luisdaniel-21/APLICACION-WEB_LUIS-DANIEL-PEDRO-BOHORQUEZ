
<?php
    include("cn.php");
    $id = $_GET["id"];
    $productos = "SELECT * FROM productos WHERE id_producto = '$id'"; 
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR PRODUCTOS</title>
    <link rel="stylesheet" href="css/tabla.css">
</head>
<body>

    <form class="container-table container-table-edit" action="procesar_actualizar.php" method="post">
        <div class="table__title table__title-edit">PRODUCTOS REGISTRADO</div>
    
        <div class="table__header">PRODUCTO</div>
        <div class="table__header">MARCA</div>
        <div class="table__header">MODELO</div>
        <div class="table__header">PRECIO</div>
        <div class="table__header">OPERACION</div>

        <?php
            $resultado = mysqli_query($conexion, $productos);
            while($row=mysqli_fetch_assoc($resultado)) { ?>

        <input type="hidden" class="table__item" value="<?php echo $row["id_producto"];?>" name="id">
        <input type="text" class="table__input" value="<?php echo $row["producto"];?>" name="producto">
        <input type="text" class="table__input" value="<?php echo $row["marca"];?>" name="marca">
        <input type="text" class="table__input" value="<?php echo $row["modelo"];?>" name="modelo">
        <input type="text" class="table__input" value="<?php echo $row["precio"];?>" name="precio">

        <?php } mysqli_free_result($resultado); ?>

        <input type="submit" value="ACTUALIZAR" class="container__submit container__submit-actualizars">

            </form>
</body>
</html>