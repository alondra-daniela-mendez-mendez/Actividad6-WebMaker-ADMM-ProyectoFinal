<?php
include("conexion.php");
$con=conectar();

$idser=$_POST['idser'];
$costof=$_POST['costof'];
$idtra=$_POST['idtra'];
$idcli=$_POST['idcli'];
$fecha=$_POST['fecha_ven'];
$anticipo=$_POST['anticipo'];


$sql="INSERT INTO venta VALUES ('','$idser','$costof','$idtra','$idcli','$fecha','$anticipo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: venta.php");
    
}else {
}
?>