<?php
    include("cn.php");
    $ventas = "SELECT * FROM ventas";
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTAS</title>
    <link rel="stylesheet" href="css/venta.css">
</head>
<body>

    <div class="container-table">
        <div class="table__title">VENTAS REGISTRADAS <a title="IMPRIMIR" style="text-decoration:none" href="reporte.php" class="title_edit">&#128438;</a> </div>
    
        <div class="table__header">PRODUCTO</div>
        <div class="table__header">CANTIDAD</div>
        <div class="table__header">PRECIO</div>
        <div class="table__header">TOTAL</div>

        <?php
            $resultado = mysqli_query($conexion, $ventas);
            while($row=mysqli_fetch_assoc($resultado)) { ?>

        <div class="table__item"> <?php echo $row["producto"] ?> </div>
        <div class="table__item"> <?php echo $row["cantidad"] ?> </div>
        <div class="table__item"> <?php echo $row["precio"] ?> </div>
        <div class="table__item"> <?php echo $row["total"] ?> </div>

        <?php } mysqli_free_result($resultado); ?>

    </div>

    <main>
        <div align="center">
        <a title="Menu" href="menu.html" ><img src="img/retorno.png" height="100" width="100"/></a>
        <a title="CONVERTIR A XML" href="xml3.php" ><img src="img/xml.png" height="100" width="100"/></a>
        </div>
    </main>
    
</body>
</html>