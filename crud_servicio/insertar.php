<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$costo=$_POST['costo'];
$tiempo=$_POST['tiempo'];
$tipo=$_POST['tipo'];
$detail=$_POST['det'];
$disp=$_POST['disp'];


$sql="INSERT INTO servicio VALUES ('','$nombre','$costo','$tiempo','$tipo','$detail','$disp')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: servicio.php");
    
}else {
}
?>