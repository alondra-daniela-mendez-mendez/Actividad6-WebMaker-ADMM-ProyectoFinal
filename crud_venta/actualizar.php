<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM venta WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
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
                <h1 class=titulo2>Editar Registro de Empleados</h1>
            </div>
        </header>	
                <div class="container mt-5">
                    <form action="update.php" method="post" class="update">
                        <?php echo "<h1 align=center>Modificar datos datos de la ID: ".$id."</h1>"?>
                        <input type="hidden" name="id" placeholder="ID" value="<?php echo $row['id']  ?>">
                        <input type="text" name="idser" placeholder="Servicio" id="idser" required value="<?php echo $row['id_servicio']  ?>">
                        <input type="number" name="costof" placeholder="00.00" id="costof" required value="<?php echo $row['costo_final']  ?>">
                        <input type="text" name="idtra" placeholder="Trabajador" id="idtra" required value="<?php echo $row['id_trabajador']  ?>">
                        <input type="text" name="idcli" placeholder="Cliente" id="idcli" required value="<?php echo $row['id_cliente']  ?>">
                        <input type="date" name="fecha_ven" id="fecha_ven" required value="<?php echo $row['fecha']  ?>">
                        <input type="number" name="anticipo" placeholder="00.00" id="anticipo" required value="<?php echo $row['anticipo']  ?>">
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
