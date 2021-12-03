<?php
$conexion=mysqli_connect("localhost", "root", "123", "deportes_bd"); //creamos conexion
 
if(!$conexion){
    echo "ERROR AL CONECTAR...";
}
else{
$result=mysqli_query($conexion, "Select * from productos"); //realizamos una consulta

$xml = new DOMDocument("1.0");
 

$xml->formatOutput=true; //Formato de XML
$productos=$xml->createElement("PRODUCTO");
$xml->appendChild($productos);

while($row=mysqli_fetch_array($result)){
    $usuario=$xml->createElement("productos");
    $productos->appendChild($usuario);
     
    $produ=$xml->createElement("producto", $row['producto']);
    $usuario->appendChild($produ);
     
    $marca=$xml->createElement("marca", $row['marca']);
    $usuario->appendChild($marca);
     
    $modelo=$xml->createElement("modelo", $row['modelo']);
    $usuario->appendChild($modelo);
     
    $precio=$xml->createElement("precio", $row['precio']);
    $usuario->appendChild($precio);
     
}
echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("report.xml");
}
?>