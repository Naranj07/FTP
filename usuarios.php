<?php

//imclude para llamar a conexion y que returne con
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Usurios Registrados</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <!-- Container para separar el cuerpo del body--->
    <div class="container mt-5">


        <div class="row">
            <h1>Ingrese los datos del Usuario</h1>

            <form action="insertar.php" method="POST">
                <!-- igual a los campos de la bd -->
                <input type="text" class="form-control mb-3" name="cedula" placeholder="Cedula">
                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">

                <input type="submit" class="btn btn-primary" value="Agregar">

            </form>
        </div>

        <div class='row mt-5'>


            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    //arreglo donde cada vez que se relize la consulta, vaya a agregar a los campos los datos 
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th><?php echo $row['cedula'] ?></th>
                            <th><?php echo $row['nombre'] ?></th>
                            <th><?php echo $row['apellidos'] ?></th>
                            <th><?php echo $row['direccion'] ?></th>
                            <th><?php echo $row['telefono'] ?></th>

                            <th><a href="actualizar.php?id=<?php echo $row['cedula'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['cedula'] ?>" class="btn btn-danger">Eliminar</a></th>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

                </tbody>
            </table>

        </div>

    </div>

</body>

</html>