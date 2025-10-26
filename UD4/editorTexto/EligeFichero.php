<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegir fichero</title>
</head>
<body>
    <br><br>
    <form name="fichero" action="EditaFichero.php" enctype="multipart/form-data" method="post">
        <label for="nombre">Nombre del fichero:</label>
        <input type="text" id="nombre" name="nombre">
        <input type="submit" value="Editar/Crear">
        <input type="submit" value="Leer"> 
    </form>
</body>
</html>

<?php

?>