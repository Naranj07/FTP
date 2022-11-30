<?php

function conectar(){

    //credenciales de la base de datos
    $host="localhost";
    $user="root";
    $pass="";

    $bd="proyectosist";

    //variable q conecta a la base de datos con los credenciales
    $con=mysqli_connect($host,$user,$pass);

    //realiza un select a la base de datos
    mysqli_select_db($con,$bd);

    return $con;

}
