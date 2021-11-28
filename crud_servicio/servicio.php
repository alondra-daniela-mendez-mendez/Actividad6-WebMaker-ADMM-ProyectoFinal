<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM servicio";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> WebMaster | Servicios</title>
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
            <h1 class=titulo>Registro de Servicios</h1>	
		</div>
	</header>
    
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-4">
                            <h1>Ingrese datos</h1>
                            <form action="insertar.php" method="post">
                                <label for="nombre">Nombre:</label><br>
                                <input type="text" name="nombre" placeholder="Nombre" id="nombre" required><br>
                                <label for="costo">Costo:</label><br>
                                <input type="text" name="costo" placeholder="00.00" id="costo" required><br>
                                <label for="tiempo">Tiempo de Entrega:</label><br>
                                <input type="number" name="tiempo" placeholder="Numero de días" step="1" id="tiempo" required><br>
                                <label for="tipo">Tipo de Servicio:</label><br>
                                <select name="tipo" id="tipo">
                                    <option value="Página Web">Página Web</option>
                                    <option value="Contratación de Hosting">Contratación de Hosting</option>
                                    <option value="Desarrollo Móvil">Desarrollo Móvil</option>
                                    <option value="Base de Datos">Base de Datos</option>
                                    <option value="Otro">Otro</option>
                                </select>
                                <label for="det">Detalles:</label><br>
                                <input type="text" name="det" placeholder="Detalles o especificaciones del servicio" id="det"><br>
                                <label for="disp">Disponibilidad:</label><br>
                                <input type="radio" name="disp" value="Si" id="si" class="rb" required>
                                <label for="si">Si</label>
                                <input type="radio" name="disp" value="No" id="no" class="rb">
                                <label for="no">No</label>
                                <input type="submit" name="enviar">
                            </form>
                        </div>

                        <div class="col-md-8">
                            <h1>Registro de Datos</h1>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Costo</th>
                                        <th>Tiempo de Entrega</th>
                                        <th>Tipo de Servicio</th>
                                        <th>Detalles</th>
                                        <th>Disponible</th>
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
                                                <td><?php  echo $row['nombre']?></td>
                                                <td><?php  echo "$".$row['costo']?></td>
                                                <td><?php  echo $row['tiempo_dias']." días"?></td>  
                                                <td><?php  echo $row['tipo']?></td>  
                                                <td><?php  echo $row['detalles']?></td>  
                                                <td><?php  echo $row['disponible']?></td>    
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
