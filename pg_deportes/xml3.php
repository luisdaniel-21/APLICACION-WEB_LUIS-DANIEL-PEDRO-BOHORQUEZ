<?php
$conexion=mysqli_connect("localhost", "root", "123", "deportes_bd"); //creamos conexion
 
if(!$conexion){
    echo "ERROR AL CONECTAR...";
}
else{
$result=mysqli_query($conexion, "Select * from ventas"); //realizamos una consulta

$xml = new DOMDocument("1.0");
 

$xml->formatOutput=true; //Formato de XML
$ventas=$xml->createElement("VENTAS");
$xml->appendChild($ventas);

while($row=mysqli_fetch_array($result)){
    $usuario=$xml->createElement("ventas");
    $ventas->appendChild($usuario);
     
    $produ=$xml->createElement("producto", $row['producto']);
    $usuario->appendChild($produ);
     
    $cantidad=$xml->createElement("cantidad", $row['cantidad']);
    $usuario->appendChild($cantidad);
     
    $precio=$xml->createElement("precio", $row['precio']);
    $usuario->appendChild($precio);
     
    $total=$xml->createElement("total", $row['total']);
    $usuario->appendChild($total);
     
}
echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("report.xml");
}
?>