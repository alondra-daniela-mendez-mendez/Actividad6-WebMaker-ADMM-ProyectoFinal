<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['ape'];
$email=$_POST['correo'];
$tel=$_POST['tel'];
$reg=$_POST['region'];
$perfil=$_POST['red'];


$sql="UPDATE cliente SET  nombre='$nombre',apellidos='$apellidos',correo='$email',telefono='$tel',region='$reg',perfil_social='$perfil' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>