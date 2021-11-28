<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['ape'];
$email=$_POST['correo'];
$reg=$_POST['region'];
$fecha_nac=$_POST['fecha_nac'];
$especialidad=$_POST['espe'];

$sql="UPDATE empleados SET  nombre='$nombre',apellidos='$apellidos',correo='$email',region='$reg',fecha_nac='$fecha_nac',especializacion='$especialidad' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>