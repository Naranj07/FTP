<?php

include("conexion.php");
$con=conectar();

$cedula=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE cedula='$cedula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios.php");
    }
?>