<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM cliente WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WebMaster | Actualizar Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../estilo_form.css">
        
    </head>
    <body>
        <header>
            <div class="wrapp">
                <div class="logo">
                    <a href="#"><img src="../img/logo.png" alt="WebMaker"></a>
                </div>
                <h1 class=titulo2>Editar Registro de Clientes</h1>
            </div>
        </header>	
                <div class="container mt-5">
                    <form action="update.php" method="post" class="update">
                        <?php echo "<h1 align=center>Modificar datos datos de la ID: ".$id."</h1>"?>
                        <input type="hidden" name="id" placeholder="ID" value="<?php echo $row['id']  ?>">
                        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>" required>
                        <input type="text" name="ape" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>" required>
                        <input type="email" name="correo" placeholder="micorreo@gmail.com" value="<?php echo $row['correo']  ?>" required>
                        <input type="text" name="tel" placeholder="Teléfono con 10 digitos" maxlength="10" minlength="10" value="<?php echo $row['telefono']  ?>" required>
                        <input list="reg" name="region" value="<?php echo $row['region']  ?>" required>
                        <datalist id="reg">
                            <option value="Norte America">
                            <option value="Centroamerica">
                            <option value="Sudamerica">
                            <option value="Europa">
                        </datalist>
                        <input type="text" name="red" placeholder="Red Social/Nombre Perfil" value="<?php echo $row['perfil_social']  ?>" >
                        <input type="submit" name="empleado" value="Actualizar">
                    </form>
                </div>
            <footer>
		        <div>
                    <p> SUBMÓDULO 2 Desarrolla aplicaciones Web con conexión a bases de datos</p>
                    <h3>Méndez Méndez Alondra Daniela 5J • No. Lista: 27  </h3>
                    <a href="https://github.com/alondra-daniela-mendez-mendez">https://github.com/alondra-daniela-mendez-mendez </a>
		        </div>
	        </footer>
    </body>
</html>
