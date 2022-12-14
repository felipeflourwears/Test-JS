<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">


    <title>C1-insertar imagen</title>
</head>
<body>

<div class="row">
    <div class="col 16 offset-13">

    <h5 class="grey-text text-darken-l">Insertar Imagen con PhP y MySQL</h5>    
    
    <form action="php/funciones.php" method="post" enctype="multipart/form-data">
    
        <div class="file-field input-field">
            <div class="btn-small amber darker-l">
                <span>Elige una imagen</span>
                <input type="file" name="foto" id="foto">
            </div>
            <div class="file-path-wrapper">
                <input type="text" class="file-path validate">
            </div>
        </div>

        <div class="input-field">
            <button type="submit" class="btn-small blue" name="btn-agregar" id="btn-agregar">Agregar</button>
        </div>

    </form>
    
    </div>
</div>

</body>
</hmtl>
