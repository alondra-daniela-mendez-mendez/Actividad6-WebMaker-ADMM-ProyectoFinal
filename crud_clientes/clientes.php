<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> WebMaster | Clientes</title>
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
            <h1 class=titulo>Registro de Clientes</h1>	
		</div>
	</header>
    
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-4">
                            <h1>Ingrese datos</h1>
                            <form action="insertar.php" method="post">
                                <label for="nombre">Nombre:</label><br>
                                <input type="text" name="nombre" placeholder="Nombre" id="nombre" required><br>
                                <label for="ape">Apellidos:</label><br>
                                <input type="text" name="ape" placeholder="Apellidos" id="ape" required><br>
                                <label for="correo">Correo:</label><br>
                                <input type="email" name="correo" placeholder="micorreo@gmail.com" id="correo" required><br>
                                <label for="tel">Teléfono:</label><br>
                                <input type="text" name="tel" placeholder="Teléfono con 10 digitos" id="tel" maxlength="10" minlength="10" required><br>
                                <label for="region">Region:</label><br>
                                <select name="region" id="region">
                                    <option value="Norte America">Norte America</option>
                                    <option value="Centroamerica">Centroamerica</option>
                                    <option value="Sudamerica">Sudamerica</option>
                                    <option value="Europa">Europa</option>
                                </select>
                                <label for="red">Perfil de contacto:</label><br>
                                <input type="text" name="red" placeholder="Red Social/Nombre Perfil" id="red"><br>
                                <input type="submit" name="enviar">
                            </form>
                        </div>

                        <div class="col-md-8">
                            <h1>Registro de Datos</h1>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Región</th>
                                        <th>Perfil Social</th>
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
                                                <td><?php  echo $row['apellidos']?></td>
                                                <td><?php  echo $row['correo']?></td>  
                                                <td><?php  echo $row['telefono']?></td>  
                                                <td><?php  echo $row['region']?></td>  
                                                <td><?php  echo $row['perfil_social']?></td>    
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
