<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM servicio WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> WebMaster | Actualizar Registro</title>
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
                <h1 class=titulo2>Editar Registro de Servicios</h1>
            </div>
        </header>	
                <div class="container mt-5">
                    <form action="update.php" method="post" class="update">
                        <?php echo "<h1 align=center>Modificar datos datos de la ID: ".$id."</h1>"?>
                        <input type="hidden" name="id" placeholder="ID" value="<?php echo $row['id']  ?>">
                        <input type="text" name="nombre" placeholder="Nombre" id="nombre" value="<?php echo $row['nombre']  ?>" required>
                        <input type="text" name="costo" placeholder="00.00" id="costo" value="<?php echo $row['costo']  ?>" required>
                        <input type="number" name="tiempo" placeholder="Numero de días" step="1" id="tiempo" value="<?php echo $row['tiempo_dias']  ?>" required>
                        <input list="tipo" name="tipo" value="<?php echo $row['tipo']  ?>" required>
                        <datalist id="tipo">
                            <option value="Página Web">
                            <option value="Contratación de Hosting">
                            <option value="Desarrollo Móvil">
                            <option value="Base de Datos">
                            <option value="Otro">
                        </datalist>
                        <input type="text" name="det" placeholder="Detalles o especificaciones del servicio" id="det" value="<?php echo $row['detalles']  ?>">
                        <label for="disp">Disponibilidad:</label><br>
                            <input type="radio" name="disp" value="Si" id="si" class="rb" required>
                            <label for="si">Si</label>
                            <input type="radio" name="disp" value="No" id="no" class="rb">
                            <label for="no">No</label>                
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
