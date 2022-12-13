<?php
$server = "IP";
$user = "";
$pass = "PASS";
$db ="DB";

$conexion = mysqli_connect($server, $user, $pass, $db);
#$conexion = mysqli_connect("localhost", "root", "12345678", "login");
if($conexion){
    echo "Conexion Exitosa";
}

?>
