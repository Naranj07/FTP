<?php
include("conexion.php");
$con=conectar();

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];


$sql="INSERT INTO usuarios VALUES('$cedula','$nombre','$apellidos','$direccion','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuarios.php");
    
}else {
}
?>