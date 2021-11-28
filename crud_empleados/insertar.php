<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellidos=$_POST['ape'];
$email=$_POST['correo'];
$reg=$_POST['region'];
$fecha_nac=$_POST['fecha_nac'];
$especialidad=$_POST['espe'];


$sql="INSERT INTO empleados VALUES ('','$nombre','$apellidos','$email','$reg','$fecha_nac','$especialidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleados.php");
    
}else {
}
?>