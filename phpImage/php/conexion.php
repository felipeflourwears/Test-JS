<?php
$server = "localhost";
$user = "root";
$pass = "";
$db ="c1";

$conexion = mysqli_connect($server, $user, $pass, $db);
#$conexion = mysqli_connect("localhost", "root", "12345678", "login");
if($conexion){
    echo "Conexion Exitosa";
}

?>