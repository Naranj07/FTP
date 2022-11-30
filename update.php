<?php

include("conexion.php");
$con=conectar();

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

$sql="UPDATE usuarios SET  nombre='$nombre',apellidos='$apellidos',direccion='$direccion',telefono='$telefono' WHERE cedula='$cedula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios.php");
    }
?>