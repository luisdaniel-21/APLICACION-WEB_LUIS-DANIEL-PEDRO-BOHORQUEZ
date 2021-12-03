
<?php
    include("cn.php");
    $productos = "SELECT * FROM productos";
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROPA DEPORTIVA</title>
    <link rel="stylesheet" href="css/tabla.css">
</head>
<body>

    <div class="container-table">
        <div class="table__title">PRODUCTOS REGISTRADOS <a href="edicionP.php" class="title_edit"> EDITAR </a> </div>
    
        <div class="table__header">PRODUCTO</div>
        <div class="table__header">MARCA</div>
        <div class="table__header">MODELO</div>
        <div class="table__header">PRECIO</div>

        <?php
            $resultado = mysqli_query($conexion, $productos);
            while($row=mysqli_fetch_assoc($resultado)) { ?>

        <div class="table__item"> <?php echo $row["producto"] ?> </div>
        <div class="table__item"> <?php echo $row["marca"] ?> </div>
        <div class="table__item"> <?php echo $row["modelo"] ?> </div>
        <div class="table__item"> <?php echo $row["precio"] ?> </div>

        <?php } mysqli_free_result($resultado); ?>

    </div>

    <main>
        <div align="center">
        <a title="Menu" href="menu.html" ><img src="img/retorno.png" height="100" width="100"/></a>
        <a title="CONVERTIR A XML" href="xml.php" ><img src="img/xml.png" height="100" width="100"/></a>
        </div>
    </main>

   
   
    
</body>
</html>