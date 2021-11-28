<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellidos=$_POST['ape'];
$email=$_POST['correo'];
$tel=$_POST['tel'];
$reg=$_POST['region'];
$perfil=$_POST['red'];


$sql="INSERT INTO cliente VALUES ('','$nombre','$apellidos','$email','$tel','$reg','$perfil')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientes.php");
    
}else {
}
?>