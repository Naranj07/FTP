<?php
include("conexion.php");
$con = conectar();


$id = $_GET['id'];


$sql = "SELECT * FROM usuarios WHERE cedula='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="hidden" name="cedula" value="<?php echo $row['cedula']  ?>">

            <!--- php aqui llena la tabla -->
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
            <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
            <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']  ?>">
            <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>