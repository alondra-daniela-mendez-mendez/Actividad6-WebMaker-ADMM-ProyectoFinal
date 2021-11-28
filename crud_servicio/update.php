<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$costo=$_POST['costo'];
$tiempo=$_POST['tiempo'];
$tipo=$_POST['tipo'];
$detail=$_POST['det'];
$disp=$_POST['disp'];

$sql="UPDATE servicio SET  nombre='$nombre',costo='$costo',tiempo_dias='$tiempo',tipo='$tipo',detalles='$detail',disponible='$disp' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: servicio.php");
    }
?>