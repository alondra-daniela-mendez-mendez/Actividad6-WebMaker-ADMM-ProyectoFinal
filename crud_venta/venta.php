<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM venta";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> WebMaster | Ventas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../estilo_form.css">
    </head>
    <body>
    <header>
		<div>
            <a href="../index.php" class="index">Inicio</a>
			<a href="../index.php" class="logo"><img src="../img/logo.png" alt="WebMaker"></a>
            <h1 class=titulo>Registro de Ventas</h1>	
		</div>
	</header>
    
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-4">
                            <h1>Ingrese datos</h1>
                            <form action="insertar.php" method="post">
                                <label for="idser">ID Servicio:</label><br>
                                <input type="text" name="idser" placeholder="Servicio" id="idser" required><br>
                                <label for="costof">Costo Total:</label><br>
                                <input type="number" name="costof" placeholder="00.00" id="costof" required><br>
                                <label for="idtra">ID Trabajador:</label><br>
                                <input type="text" name="idtra" placeholder="Trabajador" id="idtra" required><br>
                                <label for="idcli">ID Cliente:</label><br>
                                <input type="text" name="idcli" placeholder="Cliente" id="idcli" required><br>
                                <label for="fecha_ven">Fecha de Venta:</label><br>
                                <input type="date" name="fecha_ven" id="fecha_ven" required><br>
                                <label for="anticipo">Anticipo:</label><br>
                                <input type="number" name="anticipo" placeholder="00.00" id="anticipo" required><br>
                                <input type="submit" name="enviar">
                            </form>
                        </div>

                        <div class="col-md-8">
                            <h1>Registro de Datos</h1>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>ID Servicio</th>
                                        <th>Costo Final</th>
                                        <th>ID Trabajador</th>
                                        <th>ID Cliente</th>
                                        <th>Fecha de Venta</th>
                                        <th>Anticipo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><?php  echo $row['id']?></td>
                                                <td><?php  echo $row['id_servicio']?></td>
                                                <td><?php  echo "$".$row['costo_final']?></td>
                                                <td><?php  echo $row['id_trabajador']?></td>  
                                                <td><?php  echo $row['id_cliente']?></td>  
                                                <td><?php  echo $row['fecha']?></td>  
                                                <td><?php  echo "$".$row['anticipo']?></td>    
                                                <td><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></td>
                                                <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></td>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
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
