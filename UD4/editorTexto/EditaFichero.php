<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita texto</title>
</head>

<body>
    <?php
    $nombreFichero = $_POST['nombre'];
    ?>
    <h2>Editando: <?php echo $nombreFichero?></h2>
    <form name="editor" method="post" enctype="multipart/form-data" action="LeeFichero.php?nombre=<?php echo $nombreFichero; ?>">
    <textarea id="texto" name="texto" rows="10" cols="50"></textarea><br><br>
    <input type="button" value="Volver">Volver
    <input type="submit" value="Guardar cambios">
    </form>
    
</body>
</html>
