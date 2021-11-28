<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$idser=$_POST['idser'];
$costof=$_POST['costof'];
$idtra=$_POST['idtra'];
$idcli=$_POST['idcli'];
$fecha=$_POST['fecha_ven'];
$anticipo=$_POST['anticipo'];

$sql="UPDATE venta SET  id_servicio='$idser',costo_final='$costof',id_trabajador='$idtra',id_cliente='$idcli',fecha='$fecha',anticipo='$anticipo' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>