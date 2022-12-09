<?php
require_once('conexion.php');
if(isset($_REQUEST['btn-agregar'])){

    $nombre_imagen=$_FILES['foto']['name'];
    $temporal=$_FILES['foto']['tmp_name'];
    $carpeta='../img';
    $ruta=$carpeta."/".$nombre_imagen;
    move_uploaded_file($temporal,$carpeta.'/'.$nombre_imagen);

    $query="INSERT INTO imagen (ruta) VALUE('$ruta')";
    $execute=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

    if($execute){
        header("Location: ../index.php");
    }else{
        echo "Hubo un ERROR";
    }
}

?>